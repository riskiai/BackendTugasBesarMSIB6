@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-center align-items-center w-100 m-0 p-0">
        <div class="position-relative w-100">
            <img src="asset/img/daftar_magang.png" alt="" class="img-fluid"
                style="height: 50vh; object-fit: cover; z-index: 0;" />
            <img src="asset/img/gambar_magang.png" alt="" class="position-absolute"
                style="top: 50%; left: 80px; transform: translateY(-50%); z-index: 1; width: 250px; height: auto;" />
            <img src="asset/img/gambar_kanan.png" alt="" class="position-absolute"
                style="top: 50%; right: 90px; transform: translateY(-50%); z-index: 1; width: 100px; height: auto;" />

            <div class="position-absolute text-center"
                style="top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                <p class="mb-2" style="color: black; padding: 5px 10px; font-weight: bold;">
                    Daftar sebagai peserta magang
                </p>
                <a href="{{ url('login') }}" class="btn btn-light" style="padding: 10px 20px; color: black;">
                    Daftar
                </a>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-center align-items-center w-100 m-0 p-0">
        <div class="position-relative w-90">
            <img src="asset/img/daftar_perusahaan.png" alt="" class="img-fluid"
                style="height: 70vh; object-fit: cover; z-index: 0;" />
            <img src="asset/img/Building.png" alt="" class="position-absolute"
                style="top: 30%; left: 20%; transform: translateY(-20%); z-index: 1; width: 230px; height: auto;" />

            <div class="position-absolute text-center"
                style="top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                <p class="mb-2" style="color: black; padding: 5px 10px; font-weight: bold;">Daftar sebagai peserta
                    Perusahaan
                </p>
                <a href="{{ url('login-perusahaan') }}" class="btn btn-light"
                    style="padding: 10px 20px; color: black;">Daftar</a>
            </div>
        </div>
    </section>
@endsection
