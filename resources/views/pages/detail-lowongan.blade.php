@extends('layouts.app')

@section('content')
    <section>
        <div style="margin-top: 70px; background-image: linear-gradient(#074173, #0C71C7);">
            <div class="p-2" style="height: 100vh; margin-top: -70px">
                <div class="container rounded-4 py-4 px-4" style="background-color: #CEDDE6; margin-top: 75px">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-5 px-4">
                                <div class="bg-light p-3 rounded-4">
                                    <img class="rounded-4 img-fluid" src="{{ asset('images/lowongan.jpeg') }}"
                                        alt="laptop">
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
                                        <div class="d-flex gap-3">

                                            {{-- Apabila user klik daftar akan muncul modal form, apabila klik simpan akan tersimpan --}}
                                            {{-- Company tidak dapat melihat tombol daftar dan simpan --}}
                                            {{-- Apabila guest klik daftar atau simpan, akan muncul modal login --}}
                                            @if (auth()->check())
                                                <button class="btn text-white rounded-pill" data-bs-toggle="modal"
                                                    data-bs-target="#applyModal"
                                                    style="background-color: #074173; width: 123px;">
                                                    Daftar
                                                </button>
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
            <div class="modal-content rounded-4">
                <div class="modal-body p-5">
                    <h1 class="modal-title fs-4 text-center font-kufam fw-bold" id="loginModalLabel" style="color: #074173">
                        Login menggunakan akun ApprenTech
                    </h1>
                    <p class="m-0 text-center" style="color: #074173">
                        Anda bisa melakukan aksi ini ketika Anda sudah login dan
                        menggunakan akun ApprenTech.
                    </p>
                    <div class="d-flex flex-column align-items-center mt-4">
                        <a href="{{ route('login') }}" class="btn text-white rounded-pill px-5 mb-3" style="background-color: #2092D1">Login</a>
                        <p class="m-0" style="color: #074173">Belum punya akun?</p>
                        <a href="{{ route('register') }}" class="btn text-white rounded-pill px-5" style="background-color: #074173;">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Daftar-->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="min-width: 700px">
            <div class="modal-content">
                <form action="{{ route('lowongan.apply', ['lowongan' => $lowongan->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Daftar Magang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row container-fluid">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="interest" class="form-label">1. Mengapa Anda tertarik dengan posisi
                                        ini?</label>
                                    <input type="text" name="pertanyaan1" class="form-control" id="interest">
                                </div>
                                <div class="mb-3">
                                    <label for="expectedSalary" class="form-label">2. Berapa gaji yang Anda harapkan untuk
                                        posisi ini?</label>
                                    <input type="text" name="pertanyaan2" class="form-control" id="expectedSalary">
                                </div>
                                <div class="mb-3">
                                    <label for="skills" class="form-label">3. Apa keterampilan dan keahlian yang bisa
                                        diunggulkan?</label>
                                    <input type="text" name="pertanyaan3" class="form-control" id="skills">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload CV (Curiculum Vitae)</label>
                                    <input class="form-control" name="cv" required type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
