@extends('layouts.layout')

@section('title', 'Posyandu Dahlia')

@section('content')
    <div class="text-center">
        <h3 class="fw-bold">Selamat Datang!</h3>
        <p>Anda Login Sebagai : <b></b></p>
    </div>

    <!-- Hero Section -->
    <section class="hero mb-5" id="home" style="background: url('{{ asset('images/banner.png') }}') no-repeat center center; background-size: cover;
        <div class="container text-center py-5">
            <h1 class="display-4 text-black-50">‎ ‎ ‎ ‎ ‎ </h1>
            <h1 class="display-4 text-black-50">‎ ‎ ‎ ‎ ‎ </h1>
            <h1 class="display-4 text-black-50">‎ ‎ ‎ ‎ ‎ </h1>
            <h1 class="display-4 text-black-50">‎ ‎ ‎ ‎ ‎ </h1>
            <h1 class="display-4 text-black-50">‎ ‎ ‎ ‎ ‎ </h1>
        </div>
    </section>

    <!-- About Section -->
    <div class="container landing-section mb-5" id="about">
        <div class="row ">
            <div class="col-md-6">
                <h5 class=" mt-3 mb-3">Tentang Kami</h5>
                <h2 class="fw-bold fs-1 mb-4">Posyandu Dahlia</h2>
                <p class="fs-5">Posyandu Dahlia adalah pusat pelayanan kesehatan masyarakat khususnya bagi ibu hamil, bayi, dan balita. Kami berkomitmen memberikan pelayanan yang terbaik untuk tumbuh kembang anak dan kesehatan ibu.</p>
                <p class="fs-5">Posyandu Dahlia Desa Ciburuy menyediakan layanan kesehatan yang lengkap, termasuk pemeriksaan rutin untuk ibu hamil dan balita, program imunisasi, konsultasi gizi, penyuluhan kesehatan, serta pemantauan pertumbuhan balita. Dengan komitmen pada kualitas pelayanan dan pencegahan penyakit, kami berupaya menciptakan generasi yang lebih sehat dan berkualitas di masa depan.</p>
                <p class="fs-5">Kami percaya bahwa pendidikan dan kesadaran kesehatan adalah kunci untuk mencapai kesehatan yang optimal. Oleh karena itu, kami juga mengadakan berbagai kegiatan penyuluhan dan pelatihan bagi masyarakat, agar setiap individu dapat memiliki pengetahuan yang cukup untuk menjaga kesehatan diri dan keluarganya.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/about.png') }}" class="img-fluid" style="width: 600px; height: 450px; margin-left: 45px; border-radius: 10px" alt="Tentang Kami">
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="container landing-section mt-5 mb-5" id="statistics">
        <div class="text-center mb-4" style="margin-top: 70px;">
            <h2 class="fw-bold fs-1">Data Posyandu Dahlia</h2>
            <p class="mb-5">Statistik Tahun 2024</p>
        </div>
        <div class="row mt-5 justify-center">
            <div class="col-md-3 text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">🤰🏻</p>
                    <h3 id="data-ibu-hamil">{{ \App\Models\Person::where('type', 'ibu hamil')->count() }}</h3>
                    <p>Data Ibu Hamil</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👶🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'bayi')->count() }}</h3>
                    <p>Data Bayi</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👨🏻‍🦲</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'batita')->count() }}</h3>
                    <p>Data Batita</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">🧑🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'balita')->count() }}</h3>
                    <p>Data Balita</p>
                </div>
            </div>
            <div class="col-md-3 text-center mt-4">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👦🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'anak-anak')->count() }}</h3>
                    <p>Data Anak-anak</p>
                </div>
            </div>
            <div class="col-md-3 text-center mt-4">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👨🏻‍🦱</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'remaja')->count() }}</h3>
                    <p>Data Remaja</p>
                </div>
            </div>
            <div class="col-md-3 text-center mt-4">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">🧔🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'dewasa')->count() }}</h3>
                    <p>Data Dewasa</p>
                </div>
            </div>
            <div class="col-md-3 text-center mt-4">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👴🏻</p>
                    <h3 id="data-lansia">{{ \App\Models\Person::where('type', 'lansia')->count() }}</h3>
                    <p>Data Lansia</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="container landing-section mt-5 mb-5" id="services">
        <div class="text-center mb-4" style="margin-top: 70px;">
            <h2 class="fw-bold fs-1">Layanan Kami</h2>
            <p class="mb-5">Kami menyediakan berbagai layanan untuk mendukung kesehatan ibu dan anak.</p>
        </div>
        <div class="row overflow-scroll" style="overflow-x: auto; white-space: nowrap">
            <div class="d-flex flex-nowrap ">
                <div class="col-md-4 text-center">
                    <div class="card mb-4" style="display: inline-block; width: 400px;">
                        <img src="{{ asset('images/imunisasi.jpg') }}" class="card-img-top" alt="Imunisasi">
                        <div class="card-body">
                            <h5 class="card-title">Imunisasi</h5>
                            <p class="card-text">Kami menyediakan layanan imunisasi lengkap untuk bayi dan balita <br> guna melindungi mereka dari penyakit berbahaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card mb-4" style="display: inline-block; width: 400px;">
                        <img src="{{ asset('images/konsultasi.jpeg') }}" class="card-img-top" alt="Konsultasi Kesehatan">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi Kesehatan</h5>
                            <p class="card-text">Kami menyediakan konsultasi kesehatan untuk ibu hamil <br>dan ibu menyusui guna memastikan kesehatan ibu dan anak terjaga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card mb-4" style="display: inline-block; width: 400px;">
                        <img src="{{ asset('images/tumbuh kembang.jpeg') }}" class="card-img-top" alt="Pemeriksaan Tumbuh Kembang Anak">
                        <div class="card-body">
                            <h5 class="card-title">Pemeriksaan Tumbuh Kembang Anak</h5>
                            <p class="card-text">Kami membantu memantau pertumbuhan dan perkembangan anak <br> agar tumbuh dengan sehat dan cerdas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card mb-4" style="display: inline-block; width: 400px;">
                        <img src="{{ asset('images/ibu hamil.jpg') }}" class="card-img-top" alt="Pemeriksaan Ibu Hamil">
                        <div class="card-body">
                            <h5 class="card-title">Pemeriksaan Ibu Hamil</h5>
                            <p class="card-text">Kami membantu memantau pertumbuhan dan perkembangan <br> kandungan agar tumbuh dengan sehat dan baik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card mb-4" style="display: inline-block; width: 400px;">
                        <img src="{{ asset('images/lansia.jpeg') }}" class="card-img-top" alt="Pemantauan Kondisi Lansia">
                        <div class="card-body">
                            <h5 class="card-title">Pemantauan Kondisi Lansia</h5>
                            <p class="card-text">Kami membantu memantau kesehatan dan daya tahan tubuh lansia <br> agar tetap terjaga dengan sehat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; {{ date('Y') }} Posyandu Dahlia. All Rights Reserved.</p>
    </footer>
@endsection
