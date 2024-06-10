@extends('layouts.app')

@section('content')
    <section class="mt-5">
        <form action="#" class="form-search d-flex align-items-center mb-3 mx-auto" data-aos="fade-up" data-aos-delay="200"
            style="background-color: #074173; position: relative; max-width: 500px; border-radius: 10px; padding-right: 40px;">
            <input type="text" class="form-control text-white" placeholder="Studi, lokasi, perusahaan, kriteria lain"
                style="background-color: #074173; border: 2px solid #0E46A3; border-radius: 10px; padding-right: 30px;" />
            <img src="{{ asset('assets/img/icon_pencarian.png') }}" alt="Search"
                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;" />
        </form>
    </section>

    <section>
        <div class="container-fluid">
            <div class="container my-3 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container my-3">
                                <div class="row justify-content-between mx-auto">
                                    <!-- Item 1 -->
                                    @foreach ($lowongans as $lowongan)
                                        <div class="col-lg-4 my-4">
                                            <div class="card border-0 p-4 text-white" style="background-color: #074173;">
                                                <div class="d-flex align-items-start">
                                                    <img src="{{ asset('assets/img/visi.png') }}" alt="Deskripsi Gambar"
                                                        class="rounded-circle border border-primary me-3"
                                                        style="width: 20%;" />
                                                    <div class="d-flex flex-column">
                                                        <h5 class="card-title">{{ $lowongan->judul }}</h5>
                                                        <div class="d-flex align-items-center mt-2">
                                                            <img src="{{ asset('assets/img/marketeq.png') }}" alt="Logo"
                                                                class="me-2" />
                                                            <p class="mb-0">{{ $lowongan->bidang }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 d-flex flex-column align-items-start">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img src="{{ asset('assets/img/location.png') }}"
                                                            alt="Location Icon" class="me-2" />
                                                        <p class="mb-0">
                                                            {{ $lowongan->lokasi ?? 'Online' }}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h5>Deskripsi Singkat</h5>
                                                        <p>{{ $lowongan->deskripsi_singkat }}</p>
                                                    </div>
                                                    <a href="/lowongan/{{ $lowongan->id }}"
                                                        class="btn btn-primary mt-2">Lihat Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- End Item 1 -->
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan slide lainnya di sini -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-2">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
@endsection
