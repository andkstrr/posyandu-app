@extends('layouts.layout')

@section('content')
    <div class="container">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#addChildModal">
            +  Tambah Data
        </button>

        <!-- Tabel untuk menampilkan data anak -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anak</th>
                    <th>Tipe</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($people as $person)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ ucfirst($person->type) }}</td>
                        <td>{{ ucfirst($person->gender) }}</td>
                        <td>{{ $person->birth_date }}</td>
                        <td>
                            {{-- Edit --}}
                            <a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            {{-- Delete --}}
                            <form action="{{ route('person.destroy', $person->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Data Anak -->
    <div class="modal fade" id="addChildModal" tabindex="-1" aria-labelledby="addChildModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addChildModalLabel">Tambah Data Pengunjung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('person.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama :</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe:</label>
                            <select name="type" id="type" class="form-select" required>
                                <option selected disabled hidden>Pilih</option>
                                <option value="bayi">Bayi (0-2 tahun)</option>
                                <option value="batita">Batita (2-3 tahun)</option>
                                <option value="balita">Balita (3-4 tahun)</option>
                                <option value="anak_anak">Anak-Anak</option>
                                <option value="remaja">Remaja</option>
                                <option value="dewasa">Dewasa</option>
                                <option value="lansia">Lansia</option>
                                <option value="ibu_hamil">Ibu Hamil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender:</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option selected disabled hidden>Pilih</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
