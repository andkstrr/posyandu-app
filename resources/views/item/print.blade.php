@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-3">Data Semua Item</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Tipe Item</th>
            </tr>
        </thead>
        <tbody>
            @foreach($item as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // Fungsi untuk mencetak halaman setelah halaman dimuat
    window.onload = function() {
        window.print(); // Otomatis memanggil fungsi print setelah halaman dimuat
    };
</script>
@endsection
