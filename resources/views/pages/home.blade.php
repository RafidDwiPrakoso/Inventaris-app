@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="display-4 text-center mb-3">
                    Selamat Datang di Aplikasi Inventaris Barang!
                </h1>
                <div class="row justify-content-center">
    <div class="col-md-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/DALL·E-2024-10-17-12.45.jpg') }}" alt="Laravel Logo" class="img-fluid img-thumbnail" style="width: 250px; height: 250px;">
    </div>
</div>

                <p class="lead text-center mb-4">
                    Aplikasi ini digunakan hanya untuk mengelola data barang, penyetokan, dan kasir. Aplikasi ini dibuat dengan menggunakan framework Laravel dan Bootstrap.
                </p>
                <p class="lead text-center">
                    Kelola semua barang Anda dengan mudah.
                </p>
                <p class="lead text-center">
                    Pantau stok dan harga barang dengan cepat.
                </p>

                <div class="d-flex justify-content-center">
                    <a href="{{ route('inventari.home') }}" class="btn btn-primary btn-lg me-2">Kelola Data Obat</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
@endsection