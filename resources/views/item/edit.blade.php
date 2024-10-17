@extends('layouts.layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-2">Edit Data Barang</h1>

    <form action="{{ route('item.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT for updates -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Barang:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe:</label>
            <select name="type" id="type" class="form-select" required>
                <option value="obat" {{ $item->type == 'obat' ? 'selected' : '' }}>Obat-obatan</option>
                <option value="alat" {{ $item->type == 'alat' ? 'selected' : '' }}>Alat Kesehatan</option>
                <option value="vaksin" {{ $item->type == 'vaksin' ? 'selected' : '' }}>Vaksin Imunisasi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
@endsection
