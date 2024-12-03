@extends('layouts.layout')

@section('title', 'Posyandu Dahlia')

@section('content')
    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::get('failed'))
        <div class="alert alert-danger">{{ Session::get('failed') }}</div>
    @endif

    <!-- Hero Section -->
    <div class="jumbotron mb-5">
        <div class="display-4">
            <b>Selamat Datang
            @if(Auth::check())
                <b class="fw-bold">{{ Auth::user()->name }},</b>
            @endif
            di Aplikasi Posyandu Dahlia!</b>
        </div>
        <hr class="my-4">
        <p>Aplikasi ini digunakan hanya oleh Pegawai Administrator POSYANDU. Digunakan untuk mengelola Data Posyandu, Data Pengunjung, dan Data Kesehatan</p>
    </div>

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

    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Pengumuman -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pengumuman</h5>
                        <p class="text-muted">DITERBITKAN: Kamis, 17 Oktober 2024</p>
                        <h6 class="fw-bold">Ayo ke Posyandu Dahlia!</h6>
                        <p class="card-text">Mari bergabung dan ikut serta dalam Posyandu Dahlia Desa Ciburuy setiap tanggal 9! Dengan kehadiran Anda, kita dapat berperan aktif dalam memantau pertumbuhan dan perkembangan buah hati Anda. Terima kasih...</p>
                    </div>
                </div>
            </div>

            <!-- Agenda Posyandu -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Agenda Posyandu</h5>
                        <p class="text-muted">Tidak Ada Agenda Baru</p>
                        <p>Belum ada Agenda dalam waktu dekat ini, untuk melihat agenda yang telah lewat silahkan cek di halaman <a href="#">Arsip Agenda</a>.</p>
                    </div>
                </div>
            </div>

            <!-- Edukasi Kesehatan -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Edukasi Kesehatan</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="text-muted">Rabu, 03 Juli 2024</span>
                                <br>
                                <a href="https://www.nestlehealthscience.co.id/artikel/dampak-stunting-untuk-anak#:~:text=Anak%20stunting%20terlihat%20juga%20lebih,tubuh%20anak%20terbilang%20lebih%20rentan."  target="_blank"
                                 class="text-decoration-none">Pengaruh Pencemaran Lingkungan terhadap Kejadian Stunting pada Balita</a>
                            </li>
                            <li>
                                <span class="text-muted">Sabtu, 14 September 2024</span>
                                <br>
                                <a href="#" class="text-decoration-none">Mitos atau Fakta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="motivationCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#motivationCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#motivationCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#motivationCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#motivationCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#motivationCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-color: #65a9f1; color: white;">
                <div class="text-center m-3 p-5">
                    <h3 class="fw-bold">"Cegah stunting, mulai dari 1000 hari pertama kehidupan anak."</h3>
                    <p class="text-light">- Kampanye Gizi Nasional</p>
                </div>
            </div>
            <div class="carousel-item" style="background-color: #65a9f1;  color: white;">
                <div class="text-center m-3 p-5">
                    <h3 class="fw-bold">"Ajak keluarga konsumsi makanan bergizi seimbang setiap hari."</h3>
                    <p class="text-light">- Kementerian Kesehatan</p>
                </div>
            </div>
            <div class="carousel-item" style="background-color: #65a9f1; color: white;">
                <div class="text-center m-3 p-5">
                    <h3 class="fw-bold">"Stunting bisa dicegah dengan memberikan ASI eksklusif."</h3>
                    <p class="text-light">- Organisasi Kesehatan Dunia (WHO)</p>
                </div>
            </div>
            <div class="carousel-item" style="background-color: #65a9f1; color: white;">
                <div class="text-center m-3 p-5">
                    <h3 class="fw-bold">"Perbaiki sanitasi untuk cegah infeksi dan stunting."</h3>
                    <p class="text-light">- UNICEF</p>
                </div>
            </div>
            <div class="carousel-item" style="background-color: #65a9f1; color: white;">
                <div class="text-center m-3 p-5">
                    <h3 class="fw-bold">"Cegah stunting, wujudkan generasi emas Indonesia."</h3>
                    <p class="text-light">- Posyandu Indonesia</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#motivationCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#motivationCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Services Section -->
    <div class="container landing-section mb-5" id="services">
        <div class="text-center mb-4" style="margin-top: 70px;">
            <h2 class="fw-bold fs-1">Layanan Kami</h2>
            <p class="mb-5">Kami menyediakan berbagai layanan untuk mendukung kesehatan ibu dan anak.</p>
        </div>
        <div class="row overflow-scroll" style="overflow-x: hidden;">
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


    <!-- Statistics Section -->
    <div class="container landing-section mt-5 mb-5" id="statistics">
        <div class="text-center mb-4" style="margin-top: 70px;">
            <h2 class="fw-bold fs-1">Data Posyandu Dahlia</h2>
            <p class="mb-5">Statistik Tahun 2024</p>
        </div>
        <div class="row row-cols-2 row-cols-md-3 g-2 justify-content-center">
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">🤰🏻</p>
                    <h3 id="data-ibu-hamil">{{ \App\Models\Person::where('type', 'ibu hamil')->count() }}</h3>
                    <p>Data Ibu Hamil</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👶🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'bayi')->count() }}</h3>
                    <p>Data Bayi</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👨🏻‍🦲</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'batita')->count() }}</h3>
                    <p>Data Batita</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">🧑🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'balita')->count() }}</h3>
                    <p>Data Balita</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👦🏻</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'anak-anak')->count() }}</h3>
                    <p>Data Anak-anak</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="statistic-card">
                    <p class="fs-1 fw-bold">👨🏻‍🦱</p>
                    <h3 id="data-bayi">{{ \App\Models\Person::where('type', 'remaja')->count() }}</h3>
                    <p>Data Remaja</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <h5>&copy; {{ date('Y') }} Posyandu Dahlia. All Rights Reserved.</h5>
        <p>Jl. Ciburuy RT01/RW03, Desa Ciburuy, Kec. Cigombong, Kab. Bogor</p>
    </footer>
@endsection
