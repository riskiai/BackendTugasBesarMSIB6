@extends('layouts.app')
@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="" class="bordered-img" />
            <div class="overlay">
                <div class="container-fluid" style="margin-top: -50px;">
                    <div class="container my-3 py-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container my-3 py-5 mx-auto">
                                        <div class="row justify-content-between">
                                            <!-- Item 1 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content">
                                                        <img src="{{ asset('assets/img/webinar_masuk.png') }}" alt="Deskripsi Gambar"
                                                            style="width: 295px; height: 200px; border: 2px solid white; background-color: white;" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content" style="color: #000000;">
                                                        <h4 class="card-title">MENDAPATKAN MAGANG IMPIAN</h4>
                                                        <p style="font-size: 12px;">Jurusan Teknik Informatika, Universitas
                                                            Indonesia</p>
                                                        <h5>Membongkar rahasia mendapatkan magang impian</h5>
                                                        <div id="visi-konten" style="margin-top: 10px;">
                                                            <h6>Speaker : Elon Musk</h6>
                                                            <p style="font-size: 12px;">Jurusan Teknik Informatika,
                                                                Universitas Indonesia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content"
                                                        style="background-color: #074173; color: white; width: 470px; height: 204px; border: 2px solid white; border-radius: 5px; margin-left: -80px;">
                                                        <h6 class="card-title"
                                                            style="display: flex; align-items: center; justify-content: center; margin-top: 10px;">
                                                            Kristofel S. Lanpada</h6>
                                                        <div style="font-size: 12px; margin-top: 20px; margin-left: 30px;">
                                                            <p>Tanggal: 20 Mei 2024</p>
                                                            <p style="margin-top: -5px;">Waktu: 10:00 AM - 12:00 PM (Waktu
                                                                Pacific)</p>
                                                            <p style="margin-top: -5px;">Platform: Zoom Meeting</p>
                                                            <p style="margin-top: -5px;">Lokasi : Online</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="margin-top: -80px;">
                            <h6>Speaker : Elon Musk</h6>
                            <p style="font-size: 12px;">Apakah Anda mahasiswa atau lulusan baru yang ingin memulai karir di
                                dunia industri teknologi atau bidang lainnya? Magang adalah langkah awal yang penting dalam
                                memperoleh pengalaman praktis dan membangun jaringan profesional. Namun, mendapatkan magang
                                impian tidaklah mudah. Dalam webinar ini, kami akan membongkar rahasia sukses untuk
                                mendapatkan
                                magang impian Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
