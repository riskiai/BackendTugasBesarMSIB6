@extends('layouts.app')

@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="" class="bordered-img" />
            <div class="overlay">
                <div class="container mt-5">
                    <form action="#" class="form-search d-flex align-items-center mb-3" data-aos="fade-up"
                        data-aos-delay="200" style="background-color: #074173; position: relative;">
                        <input type="text" class="form-control text-white"
                            placeholder="Studi, lokasi, perusahaan, kriteria lain"
                            style="background-color: #074173; padding-left: 40px;">
                        <img src="{{ asset('assets/img/icon_pencarian.png') }}" alt="Search" class="position-absolute"
                            style="left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                    </form>
                    <div class="date-and-content">
                        <div class="bg-primary rounded p-5 border-2">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Daftar
                                    </button>
                                    <p class="mb-0">Lokasi : Jakarta - Indonesia</p>
                                </div>
                                <div class="col-md-4 my-2">
                                    <h3 class="text-white">Analis Data Junior</h3>
                                </div>
                                <div class="col-md-4 my-2">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1">
                                        Simpan
                                    </button>
                                    <p class="mb-0">Perusahaan : Tech Innovators</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
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
                                            Kami mencari mahasiswa magang yang bersemangat dan termotivasi untuk bergabung
                                            dengan
                                            tim
                                            IT kami. Sebagai bagian dari tim IT Support, Anda akan mendukung operasional
                                            harian
                                            departemen IT, membantu dalam pemeliharaan perangkat keras dan perangkat lunak,
                                            serta
                                            memberikan bantuan teknis kepada karyawan perusahaan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="rounded d-flex justify-content-center align-items-center mt-5"
                                    style="height: 50%;">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">
                                        <img class="rounded mx-auto d-block mt-5" src="{{ asset('assets/img/retting.png') }}"
                                            alt="" style="width: 75%;">
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card mt-6">
                                    <h3 class="card-header">Kualifikasi</h3>
                                    <div class="">
                                        <ul>
                                            <li>Mahasiswa aktif jurusan Teknik Informatika, Sistem Informasi, atau bidang
                                                terkait
                                            </li>
                                            <li>Baik dalam komunikasi dan mampu bekerja dalam tim</li>
                                            <li>Memiliki pengetahuan dasar tentang jaringan komputer, perangkat keras, dan
                                                perangkat
                                                lunak</li>
                                            <li>Berinisiatif tinggi dan mampu bekerja mandiri</li>
                                            <li>Pengalaman dengan sistem operasi Windows dan Office Suite</li>
                                            <li>Keahlian tambahan dalam pemrograman atau keamanan siber merupakan nilai
                                                tambah
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-md-4">
                            <p>Tanggal Penutupan : 15 Mei 2024</p>
                        </div>
                        <div class="col-md-4">
                            <p>Jenis Pekerjaan : Magang</p>
                        </div>
                        <div class="col-md-4">
                            <p>Periode Kegiatan : Juni 2024 - Agustus 2024</p>
                        </div>
                    </div>
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
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Daftar Magang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row container-fluid">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="interest" class="form-label">1. Mengapa Anda tertarik dengan posisi magang
                                    ini?</label>
                                <input type="text" class="form-control" id="interest">
                            </div>
                            <div class="mb-3">
                                <label for="expectedSalary" class="form-label">2. Berapa gaji yang Anda harapkan untuk
                                    posisi magang ini?</label>
                                <input type="text" class="form-control" id="expectedSalary">
                            </div>
                            <div class="mb-3">
                                <label for="goals" class="form-label">3. Apa yang ingin Anda capai dari magang
                                    ini?</label>
                                <input type="text" class="form-control" id="goals">
                            </div>
                            <div class="mb-3">
                                <label for="skills" class="form-label">4. Apa keterampilan dan keahlian yang bisa
                                    diunggulkan?</label>
                                <input type="text" class="form-control" id="skills">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload CV (Curiculum Vitae)</label>
                                {{-- <p>
                                    Ini adalah dokumen yang merangkum riwayat hidup seseorang, termasuk pendidikan,
                                    pengalaman kerja, keterampilan, dan prestasi.
                                </p> --}}
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
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
