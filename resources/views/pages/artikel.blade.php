@extends('layouts.app')

@section('content')
    <section>
        <div class="container-fluid mt-5">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row justify-content-between mx-auto workingspace">
                                    <!-- Item 1 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">8 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">9 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">10 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="col-lg-3 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="text-end">
                                                <button class="btn"
                                                    style="
                                                    background-color: #008dda;
                                                    font-size: 64px;
                                                    font-weight: bold;
                                                    border: 6px solid rgb(98, 77, 77);
                                                    border-radius: 10px;
                                                  ">
                                                    Artikel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item 6 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">11 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 7 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">12 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-md-3 my-3">
                                        <div class="rounded" style="background-color: #074173;">
                                            <div class="lowongan-content d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('assets/img/artikel.png') }}" alt="Deskripsi Gambar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <p class="mt-2 text-left">13 Mei 2024</p>
                                        <a href="{{ url('detail-artikel') }}"
                                            class="text-primary fw-bold text-left text-decoration-none">Tantangan dan Tips
                                            Sukses saat Magang di
                                            Industri Teknologi
                                        </a>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-lg-3 my-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/img/artikel_1.png') }}" alt="Deskripsi Gambar" class="img-fluid"
                                                style="width: 150%; height: 90%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
