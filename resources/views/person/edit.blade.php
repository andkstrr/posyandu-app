@extends('layouts.layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-2">Edit Data Pengunjung</h1>

    <form action="{{ route('person.update', $person->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $person->name }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe:</label>
            <select name="type" id="type" class="form-select" required>
                <option value="bayi" {{ $person->type == 'bayi' ? 'selected' : '' }}>Bayi</option>
                <option value="batita" {{ $person->type == 'batita' ? 'selected' : '' }}>Batita</option>
                <option value="balita" {{ $person->type == 'balita' ? 'selected' : '' }}>Balita</option>
                <option value="anak-anak" {{ $person->type == 'anak-anak' ? 'selected' : '' }}>Anak-anak</option>
                <option value="remaja" {{ $person->type == 'remaja' ? 'selected' : '' }}>Remaja</option>
                <option value="dewasa" {{ $person->type == 'dewasa' ? 'selected' : '' }}>Dewasa</option>
                <option value="lansia" {{ $person->type == 'lansia' ? 'selected' : '' }}>Lansia</option>
                <option value="ibu hamil" {{ $person->type == 'ibu hamil' ? 'selected' : '' }}>Ibu Hamil</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" id="gender" class="form-select" required>
                <option value="laki-laki" {{ $person->gender == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="perempuan" {{ $person->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $person->birth_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
@endsection
