@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Data Anak</h2>
    <form action="{{ route('person.update', $person->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Anak</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $person->name }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipe</label>
            <select class="form-select" id="type" name="type" required>
                <option value="baby" {{ $person->type == 'baby' ? 'selected' : '' }}>Bayi</option>
                <option value="batita" {{ $person->type == 'batita' ? 'selected' : '' }}>Batita</option>
                <option value="balita" {{ $person->type == 'balita' ? 'selected' : '' }}>Balita</option>
                <option value="prasekolah" {{ $person->type == 'prasekolah' ? 'selected' : '' }}>Prasekolah</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="male" {{ $person->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ $person->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $person->birth_date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
