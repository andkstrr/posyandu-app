@extends('layouts.layout')

@section('title', 'Selamat Datang di Posyandu Tulip')

@section('content')
    <!-- Hero Section -->
    <section class="hero mb-5 " id="home">
        <div class="container text-center">
            <h1>Selamat Datang di Posyandu Tulip</h1>
            <p>Pelayanan kesehatan untuk ibu dan anak yang lebih baik.</p>
            <a href="#services" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Landing Page Content -->
    <div class="container landing-section mb-5" id="about">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="Tentang Kami">
            </div>
            <div class="col-md-6">
                <h2>Tentang Posyandu Tulip</h2>
                <p>Posyandu Tulip adalah pusat pelayanan kesehatan masyarakat khususnya bagi ibu hamil, bayi, dan balita. Kami berkomitmen memberikan pelayanan yang terbaik untuk tumbuh kembang anak dan kesehatan ibu.</p>
            </div>
        </div>
    </div>

    <!-- Layanan Section -->
    <div class="container landing-section mb-5" id="services">
        <div class="text-center mb-4">
            <h2>Layanan Kami</h2>
            <p class="mb-4">Kami menyediakan berbagai layanan untuk mendukung kesehatan ibu dan anak.</p>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/100" alt="Layanan 1" class="mb-3">
                <h4>Imunisasi</h4>
                <p>Kami menyediakan layanan imunisasi lengkap untuk bayi dan balita guna melindungi mereka dari penyakit berbahaya.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/100" alt="Layanan 2" class="mb-3">
                <h4>Konsultasi Kesehatan</h4>
                <p>Posyandu Tulip menyediakan konsultasi kesehatan untuk ibu hamil dan ibu menyusui guna memastikan kesehatan ibu dan anak terjaga.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/100" alt="Layanan 3" class="mb-3">
                <h4>Pemeriksaan Tumbuh Kembang Anak</h4>
                <p>Kami membantu memantau pertumbuhan dan perkembangan anak agar tumbuh dengan sehat dan cerdas.</p>
            </div>
        </div>
    </div>

    <!-- Kontak Section -->
    <div class="container landing-section bg-light" id="contact">
        <div class="text-center mb-4">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami untuk informasi lebih lanjut atau jika ingin berkonsultasi.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Alamat</h4>
                <p>Jl. Mawar No. 23, Jakarta</p>
            </div>
            <div class="col-md-6">
                <h4>Email</h4>
                <p>info@posyandutulip.com</p>
            </div>
        </div>
    </div>
@endsection
