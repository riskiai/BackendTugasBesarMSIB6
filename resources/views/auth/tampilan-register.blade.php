@extends('layouts.app')

@section('content')
    <div class="w-100 h-100" style="position: fixed;">
        <section class="w-100"
            style="height: 45%; background: no-repeat center center; background-size: cover; background-image: url('images/registrasi-mahasiswa.jpeg')">
            <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center"
                style="background-color: rgba(30, 30, 30, 0.7)">
                <h1 class="text-white font-koulen" style="letter-spacing: 3px">Daftar Sebagai Mahasiswa</h1>
                <a href="{{ route('register.user') }}" class="btn px-5"
                    style="padding: 10px 20px; color: black; background-color: #CEDDE6; border-radius: 30px;">
                    Daftar
                </a>
            </div>
        </section>

        <section class="w-100 pb-2"
            style="height: 55%; background: no-repeat center center; background-size: cover; background-image: url('images/registrasi-perusahaan.jpeg')">
            <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center"
                style="background-color: rgba(30, 30, 30, 0.7)">
                <h1 class="text-white font-koulen" style="letter-spacing: 3px">Daftar Sebagai Perusahaan</h1>
                <a href="{{ route('register.perusahaan') }}" class="btn px-5"
                    style="padding: 10px 20px; color: black; background-color: #CEDDE6; border-radius: 30px;">
                    Daftar
                </a>
            </div>
        </section>
    </div>
@endsection
