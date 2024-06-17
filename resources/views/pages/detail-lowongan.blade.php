@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-2">
            <div class="date-and-content">
                <div class="bg-primary rounded p-5 border-2">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2">
                            <button type="button" class="btn btn-light"
                                @guest
data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> @endguest
                                Daftar </button>
                                <p class="mb-0">Lokasi: {{ $lowongan->lokasi }}</p>
                        </div>
                        <div class="col-md-4 my-2">
                            <h3 class="text-white">{{ $lowongan->judul }}</h3>
                        </div>
                        <div class="col-md-4 my-2">
                            <form action="{{ route('lowongan.bookmark', ['lowongan' => $lowongan->id]) }}" method="POST">
                                @csrf
                                @auth
                                    <button type="submit"
                                        class="btn 
                                        {{ in_array($lowongan->id, $lowonganTersimpan) ? 'btn-danger' : 'btn-dark' }} rounded-pill">
                                        @if (in_array($lowongan->id, $lowonganTersimpan))
                                            Batal Simpan
                                        @else
                                            Simpan
                                        @endif
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-dark rounded-pill">
                                        Simpan
                                    </button>
                                @endauth
                            </form>

                            <!-- Modal Simpan Lowongan -->
                            @if (session('success'))
                                <div class="modal fade" id="lowonganSaveModal" tabindex="-1"
                                    aria-labelledby="lowonganSaveModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex justify-content-between">
                                                <h1 class="modal-title fs-5" id="lowonganSaveModalLabel">
                                                    Informasi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{-- alert success berisi "Anda telah terdaftar ke webinar ini. Cek email untuk informasi lebih lanjut." --}}
                                                <div class="alert alert-success" role="alert" style="font-size: 0.8rem">
                                                    {{ session('success') }}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                                Daftar
                            </button>
                            <p class="mb-0">Perusahaan: {{ $lowongan->company->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{ asset('assets/img/Pngtree.png') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <h3 class="mt-5">Deskripsi Pekerjaan</h3>
                                </div>
                            </div>
                            <div class="car-body">
                                <p class="p-3">
                                    {{ $lowongan->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card mt-6">
                            <h3 class="card-header">Kualifikasi</h3>
                            <div class="">
                                {{ $lowongan->kualifikasi }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-between">
                <div class="col-md-4">
                    <p>Tanggal Penutupan: {{ date('d F Y', strtotime($lowongan->deadline)) }}
                </div>
                <div class="col-md-4">
                    <p>Jenis Pekerjaan: {{ $lowongan->jenis }}</p>
                </div>
                <div class="col-md-4">
                    <p>Periode Kegiatan:
                        {{-- tanggal mulai in dd mm yyyy --}}
                        {{ date('d/m/Y', strtotime($lowongan->tanggal_mulai)) }}
                        -
                        {{-- tanggal berakhir in dd mm yyyy --}}
                        {{ date('d/m/Y', strtotime($lowongan->tanggal_berakhir)) }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- Modal / pop up --}}
    <!-- Button trigger modal -->

    <!-- Modal 1-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Login menggunakan akun ApprenTech
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda bisa mendaftar lowongan ini ketika anda sudah login dan
                    mendaftar menggunakan akun ApprenTech. Lengkapi Profile dan Daftar Lowongan
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Login</button>
                    <div class="ms-2">
                        <p>Belum punya akun?</p>
                        <button type="button" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
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
    <!-- Modal 3-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Berikan Rating & Komentar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h2>Rating</h2>
                        <div class="bintang">
                            <p>
                                Sangat Baik :
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </p>
                            <p>
                                Baik :
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </p>
                            <p>
                                Cukup/Netral :
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </p>
                            <p>
                                Buruk :
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </p>
                            <p>
                                Sangat Buruk :
                                <i class="bi bi-star-fill"></i>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endsection
