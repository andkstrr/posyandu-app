@extends('layouts.layout')

@section('content')
<div class="container" onload="window.print()">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('failed'))
        <div class="alert alert-danger">{{ session('failed') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <!-- Form pencarian -->
        <form action="{{ route('item.index') }}" method="GET" class="d-flex">
            <input type="text" name="search_item" class="form-control me-2" placeholder="Cari nama item..." value="{{ request('search_item') }}" style="width: 250px;">
            <button type="submit" class="btn btn-success">Cari Data</button>
            <a href="{{ route('item.index' )}}" class="btn btn-danger ms-1">Clear</a>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createItemModal" tabindex="-1" aria-labelledby="createItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createItemModalLabel">Tambah Data Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Item:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe Item:</label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="obat">Obat-obatan</option>
                                <option value="alat">Alat Kesehatan</option>
                                <option value="vaksin">Vaksin Imunisasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>
                    <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('item.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if($items->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data item.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-lg-between">
        <!-- Tombol untuk membuka modal -->
        @if (Auth::user()->role == 'kader')
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createItemModal">
            + Tambah Data Item
        </button>
        @endif

        <!-- Tombol Print -->
        <div class="d-flex content-start mt-3">
            @if (Auth::user()->role == 'admin')
                <a href="{{ route('item.print') }}" class="btn btn-primary">Print .pdf</a>
                <a href="{{ route('item.export') }}" class="btn btn-success ms-1">Export .xlsx</a>
            @endif
        </div>

        {{-- Tampilkan pagination --}}
        <div class="d-flex justify-content-end mt-3">
            {{ $items->links() }}
        </div>
    </div>
</div>
@endsection
