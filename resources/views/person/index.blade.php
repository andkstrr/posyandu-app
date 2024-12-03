@extends('layouts.layout')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('failed'))
        <div class="alert alert-danger">{{ session('failed') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <!-- Tombol untuk membuka modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createPersonModal">
            + Tambah Data Pengunjung
        </button>

        <!-- Form pencarian -->
        <form action="{{ route('person.index') }}" method="GET" class="d-flex">
            <input type="text" name="search_person" class="form-control me-2" placeholder="Cari nama..." value="{{ request('search_person') }}" style="width: 250px;">
            <button type="submit" class="btn btn-success">Cari Data</button>
            <a href="{{ route('person.index') }}" class="btn btn-danger ms-1">Clear</a>
        </form>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createPersonModal" tabindex="-1" aria-labelledby="createPersonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createPersonModalLabel">Tambah Data Pengunjung</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe:</label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="bayi">Bayi</option>
                                <option value="batita">Batita</option>
                                <option value="balita">Balita</option>
                                <option value="anak-anak">Anak-anak</option>
                                <option value="remaja">Remaja</option>
                                <option value="dewasa">Dewasa</option>
                                <option value="lansia">Lansia</option>
                                <option value="ibu hamil">Ibu Hamil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender:</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
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
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
            <tr>
                <td>{{ $loop->iteration + ($people->currentPage() - 1) * $people->perPage() }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->type }}</td>
                <td>{{ $person->gender }}</td>
                <td>{{ $person->birth_date }}</td>
                <td>
                    <a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('person.destroy', $person->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if($people->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data orang.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-lg-between">
        <div class="d-flex content-start mt-3">
            <!-- Tombol Print -->
            <a href="{{ route('person.print') }}" class="btn btn-primary">Print Semua Data</a>
        </div>

        {{-- Tampilkan pagination --}}
        <div class="d-flex justify-content-end mt-3">
            {{ $people->links() }}
        </div>
    </div>
</div>
@endsection
