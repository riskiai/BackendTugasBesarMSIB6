@extends('layouts.app')
<style>
    .card {
        /* padding=0; */
    }

    .card-wrapper {}
</style>

@section('content')
    <section id="hero" class="hero d-flex align-items-center py-5"
        style="background-image: linear-gradient(#074173, #0C71C7); border-radius: 0 0 0 200px">
        <div class="container text-white">
            <div class="row px-5 d-flex justify-content-between mb-5">
                <div class="col-lg-6 d-flex flex-column justify-content-center mb-4">
                    <h1 data-aos="fade-up" class="fw-bold">
                        Portal Magang di Industri IT Khusus untuk Mahasiswa dan Fresh Graduate
                    </h1>
                    <h3 data-aos="fade-up" data-aos-delay="100">
                        Portal magang di Industri IT bagi mahasiswa untuk mengatasi tantangan karir
                    </h3>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets/img/Group 2.png') }}" class="img-fluid mb-3 mb-lg-0" alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>

    <section id="featured-services" class="featured-services">
        <div class="container">
            <div class="my-3 py-5">
                <h1 class="text-center fw-bold text-white mx-auto"
                    style="font-size: 40px; background-color: #074173; max-width: 280px; border-radius: 100px">
                    VISI
                </h1>
                <div class="d-flex justify-content-center mb-3">
                    <p class="mb-0 text-center fs-5" style="max-width: 750px; color: #074173">
                        “Menjadi platform terdepan dalam menghubungkan mahasiswa dan fresh graduate dengan
                        perusahaan ternama di industri IT untuk peluang karir yang berkualitas.”
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="p-4 rounded d-flex gap-3" style="max-width: 900px">
                        <div class="text-center p-4 font-koulen fw-bold d-flex flex-column justify-content-center align-items-center"
                            style="border-style: solid; border-color: #074173; border-width: 20px; font-size: 50px; color: #074173; border-radius: 20px">
                            <div>M</div>
                            <div>I</div>
                            <div>S</div>
                            <div>I</div>
                        </div>
                        <div class="text-white p-4" style="background-color: #074173; border-radius: 20px">
                            <ul id="misi-konten" class="mb-0 d-flex flex-column gap-3" style="font-size: 20px">
                                <li>Meningkatkan aksesibilitas mahasiswa dan fresh graduate terhadap peluang magang di
                                    industri IT</li>
                                <li>Membangun kerjasama yang erat dengan perusahaan IT untuk menyediakan program magang yang
                                    berkualitas dan bermanfaat.</li>
                                <li>Memberikan pelatihan dan persiapan yang komprehensif bagi mahasiswa dan fresh graduate
                                    untuk sukses dalam berkarir.</li>
                                <li>Mengembangkan platform yang user-friendly dan mudah digunakan oleh mahasiswa, fresh
                                    graduate, dan perusahaan.</li>
                                <li>Menjadi sumber informasi dan edukasi terpercaya tentang industri IT dan peluang magang.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="mt-4">
        <div class="py-5 px-5" style="background-color: #E5EEF4">
            <div class="px-5 mx-5">
                <div class="mb-5">
                    <h1 class="fw-bold font-koulen" style="color: #074173; letter-spacing: 4px;">Testimoni Peserta Magang
                    </h1>
                    <h3 style="color: #0C71C7; letter-spacing: 3px">Our positive social impact</h3>
                </div>
                <div class="row justify-content-center gap-5">
                    <!-- Item 1 -->
                    <div class="col-lg-4">
                        <div class="text-center bg-light py-5 px-3" style="min-height: 250px; border-radius: 20px">
                            <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                                <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}"
                                    alt="profile picture" height="50px">
                                <div>
                                    <h4 class="card-title text-start">Riski A. Ilham</h4>
                                    <p class="text-muted m-0 text-start" style="font-size: 0.8rem">Teknik Informatika |
                                        Universitas Amandemy</p>
                                </div>
                            </div>
                            <p>“ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                dengan minat dan jurusan saya. ”</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-lg-4">
                        <div class="text-center bg-light py-5 px-3" style="min-height: 250px; border-radius: 20px">
                            <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                                <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}"
                                    alt="profile picture" height="50px">
                                <div>
                                    <h4 class="card-title text-start">Nadhif L. A. Rahim</h4>
                                    <p class="text-muted m-0 text-start" style="font-size: 0.8rem">Teknik Informatika |
                                        Universitas Amandemy</p>
                                </div>
                            </div>
                            <p>“Portal Magang IT yang digunakan dan informatif. Saya dapat mencari
                                magang berdasarkan lokasi dan jenis pekerjaan.”</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-lg-4 d-flex flex-column">
                        <div class="text-center bg-light py-5 px-3 flex-grow-1"
                            style="min-height: 250px; border-radius: 20px">
                            <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                                <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}"
                                    alt="profile picture" height="50px">
                                <div>
                                    <h4 class="card-title text-start">Kristofel S. Lanpada</h4>
                                    <p class="text-muted m-0 text-start" style="font-size: 0.8rem">Teknik Informatika |
                                        Universitas Amandemy</p>
                                </div>
                            </div>
                            <p>“ Portal Magang IT sangat membantu saya untuk mempersiapkan diri sebelum magang.”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="mt-4">
        <div class="container-fluid text-white py-5" style="background-color: #074173;">
            <div class="container">
                <h1 class="text-center font-weight-bold mb-5">Testimoni Mitra Perusahaan</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-between">
                                <!-- Item 1 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('images/dicoding-square.jpeg') }}"
                                            class="rounded-circle border border-white mb-3 img-fluid" style="width: 175px;"
                                            alt="Deskripsi Gambar">
                                        <h4 class="card-title">Riski A. Ilham</h4>
                                        <p class="text-white">CEO Dicoding</p>
                                        <p>“Portal Magang IT mempermudah kami dalam menemukan kandidat magang yang
                                            berkualitas dan sesuai dengan kebutuhan perusahaan.”</p>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('images/codepolitan-logo.png') }}"
                                            class="rounded-circle border border-white mb-3" style="width: 175px;"
                                            alt="Deskripsi Gambar">
                                        <h4 class="card-title">Nadhif L. A. Rahim</h4>
                                        <p class="text-white">CEO Codepolitan</p>
                                        <p>“Portal Magang IT memberikan akses yang mudah untuk memasang lowongan magang,
                                            sehingga kami dapat menjangkau lebih banyak mahasiswa berbakat.”</p>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('images/amanah-logo.png') }}"
                                            class="rounded-circle border border-white mb-3" style="width: 175px;"
                                            alt="Deskripsi Gambar">
                                        <h4 class="card-title">Kristofel S. Lanpada</h4>
                                        <p class="text-white">CEO PT Amanah Karya Indonesia</p>
                                        <p>“Kami sangat terbantu dengan fitur-fitur yang ada di Portal Magang IT, yang
                                            memungkinkan proses rekrutmen menjadi lebih cepat dan terorganisir.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional slides here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lowongan-kerja" class="my-5">
        <div class="container-fluid">
            <div class="container">
                <h1 class="text-center font-weight-bold mb-5">Rekomendasi Lowongan Kerja</h1>
                <div class="row justify-content-center px-5">
                    <!-- Item 1 -->
                    @foreach ($lowongans as $lowongan)
                        <div class="col-lg-4 my-4">
                            <div class="border-0 p-4 rounded-4" style="background-color: #008DDA;">
                                <div class="d-flex align-items-start mb-5">
                                    <img src="{{ $lowongan->company->foto_profil ? asset('storage/photo-profile/' . $lowongan->company->foto_profil) : asset('assets/img/visi.png') }}" alt="Deskripsi Gambar"
                                        class="rounded-circle border border-primary me-3" style="width: 20%;" />
                                    <div class="d-flex flex-column">
                                        <h5 class="card-title fw-bold">{{ $lowongan->judul }}</h5>
                                        <div class="mt-2">
                                            <p class="mb-0 d-flex gap-2 align-items-center fw-semibold">
                                                <i class="bi bi-shop-window"></i>{{ $lowongan->company->name }}
                                            </p>
                                            <p class="mb-0 d-flex gap-2 align-items-center fw-semibold">
                                                <i class="bi bi-geo-alt"></i>{{ $lowongan->lokasi ?? 'Online' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 d-flex justify-content-between align-items-center">
                                    <p class="m-0 fw-bold">
                                        {{ Str::ucfirst($lowongan->tipe) }}
                                    </p>
                                    <a href="/lowongan/{{ $lowongan->id }}"
                                        class="bg-light py-2 px-3 fw-bold rounded-5 text-decoration-none text-dark"
                                        style="font-size: 0.8rem">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Item 1 -->
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid" style="background-color: #074173; margin-top: 10px;">
            <div class="container my-3 py-5">
                <h1 class="text-center font-weight-bold text-white mb-5" style="font-size: 40px;">
                    Tahapan Pendaftaran Magang
                </h1>
                <div class="row">
                    <div class="col-lg-5 order-1 hero-img" data-aos="zoom-out" style="position: relative; top: -20px;">
                        <img src="{{ asset('assets/img/testimoni.png') }}" class="img-fluid mb-3 mb-lg-0"
                            alt="Testimoni">
                    </div>
                    <div class="col-lg-7 order-2 text-white d-flex flex-column justify-content-center">
                        <h4 class="font-weight-bold mb-2">Pendaftaran</h4>
                        <p class="mb-4 ms-3">Calon peserta mendaftarkan akun</p>
                        <h4 class="font-weight-bold mb-2">Pilih lowongan</h4>
                        <p class="mb-4 ms-3">Calon peserta memilih dan mendaftar pada lowongan magang yang dibuka</p>
                        <h4 class="font-weight-bold mb-2">Seleksi</h4>
                        <p class="mb-4 ms-3">Proses seleksi calon peserta magang oleh perusahaan penyelenggara program
                            magang</p>
                        <h4 class="font-weight-bold mb-2">Proses Magang</h4>
                        <p class="mb-4 ms-3">Proses penyelenggaraan magang di perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid mt-3">
            <div class="container my-3 py-5">
                <h5 class="text-center mb-5" style="font-size: 40px; color: #333;">Telah dipercaya oleh:</h5>
                <div class="row justify-content-center">
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 13.png') }}" class="img-fluid" alt="Logo Perusahaan 1">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 5.png') }}" class="img-fluid" alt="Logo Perusahaan 2">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 6.png') }}" class="img-fluid" alt="Logo Perusahaan 3">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 7.png') }}" class="img-fluid" alt="Logo Perusahaan 4">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 8.png') }}" class="img-fluid" alt="Logo Perusahaan 5">
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 13.png') }}" class="img-fluid" alt="Logo Perusahaan 6">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 5.png') }}" class="img-fluid" alt="Logo Perusahaan 7">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 6.png') }}" class="img-fluid" alt="Logo Perusahaan 8">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 7.png') }}" class="img-fluid" alt="Logo Perusahaan 9">
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('assets/img/Group 8.png') }}" class="img-fluid" alt="Logo Perusahaan 10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
@endsection
