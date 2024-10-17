@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-dark">
                <h3 class="mb-0">Tambah Inventaris Barang</h3>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('inventari.store')}}" method="POST">
                    @csrf
                    @if(Session::get('success'))
                        <div class="alert alert-success"> {{ Session::get('success')}}</div>
                    @endif
                    @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama barang">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Masukkan harga barang">
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" placeholder="Masukkan jumlah stok">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-primary mt-2">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
