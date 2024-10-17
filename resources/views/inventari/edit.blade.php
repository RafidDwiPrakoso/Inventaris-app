@extends('layouts.template')

@section('content')
    <form action="{{ route('inventari.update', $inventari['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        <div class="form-group">
            <label for="name" class="form-label">Nama barang : </label>
            <input type="text" name="name" id="name" value="{{ $inventari['name'] }}" class="form-control">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-label">Harga : </label>
            <input type="number" name="price" id="price" value="{{ $inventari['price'] }}" class="form-control">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $inventari ['stock'] }}">
        </div>
            @error('stock')
                <small class="text-danger">{{$message}}</small>
            @enderror
        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection