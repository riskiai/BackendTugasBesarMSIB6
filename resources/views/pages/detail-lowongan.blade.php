@extends('layouts.app')

@section('content')
    <section>
        <div style="height: 100vh; margin-top: -70px; padding-top: 70px">
            <div class="h-100 pt-3" style="background-image: linear-gradient(#074173, #0C71C7);">
                <div class="container rounded-4 py-4 px-4" style="background-color: #CEDDE6;">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-5 px-4">
                                <div class="bg-light p-3 rounded-4">
                                    <img class="rounded-4 img-fluid" src="{{ asset('images/lowongan.jpeg') }}" alt="laptop">
                                    <h2 class="font-kufam mt-4">{{ $lowongan->judul }}</h2>
                                    <p>{{ $lowongan->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="col-7 d-flex flex-column gap-3 px-4">
                                <div class="row bg-light rounded-4 px-4 py-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="font-kufam">{{ $lowongan->company->name }}</h2>
                                            <h4 class="text-secondary">{{ $lowongan->lokasi }}</h4>
                                        </div>
                                        <div class="d-flex gap-3 align-items-center">

                                            {{-- Apabila user klik daftar akan muncul modal form, apabila klik simpan akan tersimpan --}}
                                            {{-- Company tidak dapat melihat tombol daftar dan simpan --}}
                                            {{-- Apabila guest klik daftar atau simpan, akan muncul modal login --}}
                                            @if (auth()->check())
                                                @if (in_array($lowongan->id, $appliedLowongan))
                                                    <button class="btn text-white rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#applyModal" style="background-color: #074173;"
                                                        disabled>
                                                        Sudah Terdaftar
                                                    </button>
                                                @else
                                                    <button class="btn text-white rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#applyModal" style="background-color: #074173;">
                                                        Daftar
                                                    </button>
                                                @endif
                                                <form
                                                    action="{{ route('lowongan.bookmark', ['lowongan' => $lowongan->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn rounded-pill px-4 fw-semibold"
                                                        style="background-color: #CEDDE6">
                                                        <i class="fa-regular fa-bookmark"></i>
                                                        @if (in_array($lowongan->id, $lowonganTersimpan))
                                                            Batal Simpan
                                                        @else
                                                            Simpan
                                                        @endif
                                                    </button>
                                                </form>
                                            @elseif (auth()->guard('company')->check())
                                                <div></div>
                                                <div></div>
                                            @else
                                                <button class="btn text-white rounded-pill" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal"
                                                    style="background-color: #074173; width: 123px;">
                                                    Daftar
                                                </button>
                                                <button class="btn rounded-pill px-4 fw-semibold" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal" style="background-color: #CEDDE6">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    Simpan
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-light rounded-4 px-4 py-4">
                                    <div class="d-flex gap-3 fw-semibold" style="color: #074173">
                                        <div>
                                            <p class="m-0">Tanggal Penutupan</p>
                                            <p class="m-0">Jenis Pekerjaan</p>
                                            <p class="m-0">Periode Kegiatan</p>
                                        </div>
                                        <div>
                                            <p class="m-0">: {{ date('d F Y', strtotime($lowongan->deadline)) }}</p>
                                            <p class="m-0">: {{ $lowongan->jenis }}</p>
                                            <p class="m-0">:
                                                {{ date('d/m/Y', strtotime($lowongan->tanggal_mulai)) }} -
                                                {{ date('d/m/Y', strtotime($lowongan->tanggal_berakhir)) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-light rounded-4 px-4 py-4" style="color: #074173">
                                    <h2 class="font-kufam">Kualifikasi</h2>
                                    <p class="m-o">{{ $lowongan->kualifikasi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal / pop up --}}
    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4" style="background-color: #CEDDE6">
                <div class="modal-body p-5">
                    <h1 class="modal-title fs-4 text-center font-kufam fw-bold" id="loginModalLabel" style="color: #074173">
                        Login menggunakan akun ApprenTech
                    </h1>
                    <p class="m-0 text-center" style="color: #074173">
                        Anda bisa melakukan aksi ini ketika Anda sudah login dan
                        menggunakan akun ApprenTech.
                    </p>
                    <div class="d-flex flex-column align-items-center mt-4">
                        <a href="{{ route('login') }}" class="btn text-white rounded-pill px-5"
                            style="background-color: #074173">Login</a>
                        <p class="m-0 my-3" style="color: #074173">Belum punya akun?</p>
                        <a href="{{ route('login.google') }}" class="btn text-white rounded-pill px-3 py-2"
                            style="background-color: #EEF5FF; color: #074173">
                            <div class="d-flex align-items-center gap-3">
                                <img class="rounded-circle" src="{{ asset('assets/img/google_logo.png') }}"
                                    alt="Google Logo" width="35px">
                                <p class="m-0" style="color: #074173">Daftar dengan Google</p>
                            </div>
                        </a>
                        <div class="d-flex justify-content-start w-100 mt-4">
                            <a href="{{ route('register') }}" class="text-decoration-none" style="color: #074173">Sudah punya akun?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login End -->

    <!-- Modal Daftar-->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="min-width: 900px">
            <div class="modal-content rounded-4 p-4" style="background-color: #CEDDE6">
                <form action="{{ route('lowongan.apply', ['lowongan' => $lowongan->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex justify-content-between mb-3">
                            <button type="button" class="btn-close" style="visibility: hidden" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <h1 class="modal-title fs-3 font-kufam fw-semibold text-center" id="exampleModalLabel1"
                                style="color: #074173">
                                Daftar Magang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="row container-fluid">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <label for="interest" class="form-label" style="color: #074173">1. Mengapa Anda
                                        tertarik dengan posisi
                                        ini?</label>
                                    <input type="text" name="pertanyaan1" class="form-control rounded-4"
                                        style="background-color: #EEF5FF" id="interest">
                                </div>
                                <div class="mb-4">
                                    <label for="expectedSalary" class="form-label" style="color: #074173">2. Berapa gaji
                                        yang Anda harapkan untuk
                                        posisi ini?</label>
                                    <input type="text" name="pertanyaan2" class="form-control rounded-4"
                                        style="background-color: #EEF5FF" id="expectedSalary">
                                </div>
                                <div class="mb-4">
                                    <label for="skills" class="form-label" style="color: #074173">3. Apa keterampilan
                                        dan keahlian yang bisa
                                        diunggulkan?</label>
                                    <input type="text" name="pertanyaan3" class="form-control rounded-4"
                                        style="background-color: #EEF5FF" id="skills">
                                </div>
                            </div>
                            <div class="col-md-4 justify-content-between">
                                <div class="mb-3 rounded-4 p-3" style="background-color: #EEF5FF">
                                    <p class="m-0 text-center fw-semibold" style="color: #074173">Upload CV</p>
                                    <p class="text-center fw-semibold" style="color: #074173; font-size: 0.8rem">
                                        (Curiculum Vitae)
                                    </p>
                                    <p class="m-0" style="font-size: 0.65rem; color: #074173; text-align: justify">
                                        Ini adalah dokumen yang merangkum riwayat hidup seseorang, termasuk pendidikan,
                                        pengalaman kerja, keterampilan, dan prestasi.
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <label for="formFile" class="form-label text-white rounded-pill px-4 mt-3"
                                            style="background-color: #074173; cursor: pointer">Choose File</label>
                                    </div>
                                    <input class="form-control rounded-4 d-none" style="background-color: #EEF5FF"
                                        name="cv" required type="file" id="formFile">
                                </div>
                                <div class="d-flex justify-content-center gap-3">
                                    <button type="button" class="btn px-4 rounded-pill" data-bs-dismiss="modal"
                                        aria-label="Close" style="background-color: #EEF5FF">Batal</button>
                                    <button type="submit" class="btn px-4 rounded-pill text-white"
                                        style="background-color: #074173">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Daftar End -->
@endsection
