@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-3">Data Semua Pengunjung</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->type }}</td>
                    <td>{{ $person->gender }}</td>
                    <td>{{ $person->birth_date }}</td>
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
