@extends('layouts.app')
<style>
    .card {
        /* padding=0; */
    }
    
    .card-wrapper {}
</style>

@section('content')
    <section id="hero" class="hero d-flex align-items-center mt-3">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between mb-5">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center mb-4">
                    <h2 data-aos="fade-up" class="fw-bold">
                        Portal Magang di Industri IT khusus untuk mahasiswa dan fresh graduate
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Portal magang di Industri IT bagi mahasiswa mampu mengatasi tantangan penting dalam dunia pendidikan
                        dan karir
                    </p>
                    <form action="#" class="form-search d-flex align-items-center mb-3" data-aos="fade-up"
                        data-aos-delay="200" style="background-color: #074173; position: relative;">
                        <input type="text" class="form-control text-white"
                            placeholder="Studi, lokasi, perusahaan, kriteria lain"
                            style="background-color: #074173; padding-left: 40px;" />
                        <img src="{{ asset('assets/img/icon_pencarian.png') }}" alt="Search" class="position-absolute"
                            style="left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;" />
                    </form>
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
                <h1 class="text-center fw-bold" style="font-size: 40px; color: #333;">
                    VISI dan MISI
                </h1>
                <div class="row workingspace">
                    <div class="col-lg-6 mb-5 mt-3 d-flex flex-column align-items-center">
                        <div class="bg-primary p-4 rounded-circle text-center text-white mb-3">
                            <h2 class="card-title">VISI</h2>
                            <p id="visi-konten" class="mb-0" style="max-width: 300px;">
                                “Menjadi platform terdepan dalam menghubungkan mahasiswa dan fresh graduate dengan
                                perusahaan ternama di industri IT untuk peluang magang yang berkualitas.”
                            </p>
                        </div>
                        <img src="{{ asset('assets/img/visi.png') }}" alt="Gambar Visi" class="img-fluid"
                            style="width: 150px; height: auto;" />
                    </div>
                    <div class="col-lg-6 mb-5 mt-3">
                        <div class="bg-primary p-4 rounded text-white">
                            <h2 class="card-title text-center">MISI</h2>
                            <ul id="misi-konten" class="mb-0">
                                <li>Meningkatkan aksesibilitas mahasiswa dan fresh graduate terhadap peluang magang di
                                    industri IT</li>
                                <li>Membangun kerjasama yang erat dengan perusahaan IT untuk menyediakan program magang yang
                                    berkualitas dan bermanfaat.</li>
                                <li>Memberikan pelatihan dan persiapan yang komprehensif bagi mahasiswa dan fresh graduate
                                    untuk sukses dalam magang.</li>
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

    {{-- Start --}}
    {{-- <section class="mt-2" style="background-color: #074173; height: 70%;">
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-wrapper container-sm d-flex  justify-content-around mt-5">
                        <div class="card d-flex justify-content-center align-content-center" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-wrapper container-sm d-flex  justify-content-around mt-5">
                        <div class="card d-flex justify-content-center align-content-center" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <center>
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="rounded-circle"
                                    width="105px" height="100px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Riski A. Ilham</h5>
                                    <p>Jurusan Teknik Informatika, Universitas Indonesia</p>
                                    <p>
                                        “ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                        dengan
                                        minat dan jurusan saya. ”
                                    </p>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section> --}}
    {{-- End --}}

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
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Riski A. Ilham</h4>
                                        <p class="text-white">CEO Dicoding</p>
                                        <p>“ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                            dengan minat dan jurusan saya. ”</p>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Nadhif L. A. Rahim</h4>
                                        <p class="text-white">CEO Codepolitan</p>
                                        <p>“Portal Magang IT sangat mudah digunakan dan informatif. Saya dapat mencari
                                            magang berdasarkan lokasi, perusahaan, dan jenis pekerjaan.”</p>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Kristofel S. Lanpada</h4>
                                        <p class="text-white">CEO PT Amanah Karya Indonesia</p>
                                        <p>“ Portal Magang IT sangat membantu saya untuk mempersiapkan diri sebelum magang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional slides here -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="mt-4">
        <div class="container-fluid bg-primary text-white py-5">
            <div class="container">
                <h1 class="text-center font-weight-bold mb-5">Testimoni Mahasiswa</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-between">
                                <!-- Item 1 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Riski A. Ilham</h4>
                                        <p class="text-muted">Jurusan Teknik Informatika, Universitas Indonesia</p>
                                        <p>“ Portal Magang IT sangat membantu saya menemukan kesempatan magang yang sesuai
                                            dengan minat dan jurusan saya. ”</p>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Nadhif L. A. Rahim</h4>
                                        <p class="text-muted">Jurusan Teknik Informatika, Universitas Indonesia</p>
                                        <p>“Portal Magang IT sangat mudah digunakan dan informatif. Saya dapat mencari
                                            magang berdasarkan lokasi, perusahaan, dan jenis pekerjaan.”</p>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/visi.png') }}" class="rounded-circle border border-white mb-3"
                                            style="width: 50%;" alt="Deskripsi Gambar">
                                        <h4 class="card-title">Kristofel S. Lanpada</h4>
                                        <p class="text-muted">Jurusan Teknik Informatika, Universitas Indonesia</p>
                                        <p>“ Portal Magang IT sangat membantu saya untuk mempersiapkan diri sebelum magang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional slides here -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="lowongan-kerja" class="my-5">
        <div class="container-fluid">
            <div class="container">
                <h1 class="text-center font-weight-bold mb-5">Rekomendasi Lowongan Kerja</h1>
                <div class="row justify-content-center">
                    <!-- Item 1 -->
                    @for ($i = 0; $i < 5; $i++)
                        <div class="col-lg-4 my-4">
                            <div class="card border-0 p-4 text-white" style="background-color: #074173;">
                                <div class="d-flex align-items-start">
                                    <img src="{{ asset('assets/img/visi.png') }}" alt="Deskripsi Gambar"
                                        class="rounded-circle border border-primary me-3" style="width: 20%;" />
                                    <div class="d-flex flex-column">
                                        <h5 class="card-title">Marketing Manager</h5>
                                        <div class="mt-2">
                                            <p class="mb-0"><i class="bi bi-shop-window"></i> Marketing</p>
                                            <p class="mb-0"><i class="bi bi-geo-alt"></i> Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 d-flex justify-content-between">
                                    <p>
                                        PT. Indonesia Sejahtera
                                    </p>
                                    <a href="#" class="bg-light p-2 rounded-3 text-decoration-none">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <!-- End Item 1 -->
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid bg-primary" style="background-color: #074173; margin-top: 10px;">
            <div class="container my-3 py-5">
                <h1 class="text-center font-weight-bold text-white mb-5" style="font-size: 40px;">
                    Tahapan Pendaftaran Magang
                </h1>
                <div class="row">
                    <div class="col-lg-5 order-1 hero-img" data-aos="zoom-out" style="position: relative; top: -20px;">
                        <img src="{{ asset('assets/img/testimoni.png') }}" class="img-fluid mb-3 mb-lg-0" alt="Testimoni">
                    </div>
                    <div class="col-lg-7 order-2 text-white d-flex flex-column justify-content-center">
                        <ol class="mb-0">
                            <li class="font-weight-bold mb-2">Pendaftaran</li>
                            <p>Calon peserta mendaftarkan akun</p>
                            <li class="font-weight-bold mb-2">Pilih lowongan</li>
                            <p>Calon peserta memilih dan mendaftar pada lowongan magang yang dibuka</p>
                            <li class="font-weight-bold mb-2">Seleksi</li>
                            <p>Proses seleksi calon peserta magang oleh perusahaan penyelenggara program magang</p>
                            <li class="font-weight-bold mb-2">Proses Magang</li>
                            <p>Proses penyelenggaraan magang di perusahaan</p>
                        </ol>
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
