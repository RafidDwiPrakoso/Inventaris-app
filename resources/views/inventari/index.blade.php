            @extends('layouts.template')

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class="d-flex justify-content-end" role="search" action="{{ route('inventari') }}" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
    <div class="container mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Daftar Inventaris Barang</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Barang</th>
                                <th scope="col">Stok Tersedia</th>
                                <th scope="col">Harga per unit</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($inventaris) > 0)
                                @foreach ($inventaris as $index => $item)
                                    <tr>
                                        <td>{{ ($inventaris->currentPage() - 1) * $inventaris->perPage() + $index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>{{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('inventari.edit', $item['id']) }}" class="btn btn-sm btn-outline-info me-2">
                                                <i class="bi bi-pencil-square"></i> Ubah
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="showModalDelete('{{ $item->id }}', '{{ $item->name }}')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                            <a href="{{ route('inventari.show', $item['id']) }}" class="btn btn-outline-info me-2">
                                                <i class="bi bi-eye"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-bold">Data masih kosong</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $inventaris->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DELETE --}}
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin ingin menghapus data barang <strong id="name-inventari"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function showModalDelete(id, name) {
            $('#name-inventari').text(name);
            $('#modalDelete').modal('show');

            let url = "{{ route('inventari.delete', ':id') }}";
            url = url.replace(':id', id);
            $("form").attr('action', url);
        }
    </script>
@endpush

