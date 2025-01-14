@extends('layouts.template')

@section('content')
<div class="container-fluid py-3">
    <h1 class="display-5 fw-bold text-center">Kelola Akun</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class="d-flex justify-content-end" role="search" action="{{ route('user.home') }}" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambahkan Akun</a>
    </div>

    <table class="table table-striped table-hover mt-3">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tipe Pengguna</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($users->isEmpty())
            <tr>
                <td colspan="4" class="text-center">Data Pengguna Kosong</td>
            </tr>
        @else
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="text-center">
                        <a href="{{ route('user.edit',  $user->id)}}" class="btn btn-primary btn-sm">Ubah</a>
                        <button type="button" class="btn btn-danger btn-sm"
                                    onclick="showModalDelete('{{ $user->id }}', '{{ $user->name }}')">
                                    Hapus
                                </button>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center my-3">
        {{ $users->links() }} <!-- For pagination -->
    </div>

</div>

<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin menghapus Akun <b id="name-user"></b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function showModalDelete(id, name) {
            $('#name-user').text(name);
            $('#modalDelete').modal('show');

            let url = "{{ route('user.delete', ':id') }}";
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url); // Ensure this is correctly set to the delete route
        }
    </script>
@endpush
