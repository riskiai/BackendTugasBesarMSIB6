@extends('layouts.guest')

@section('content')
    <section class="container-fluid">
        <div class="text-center p-0" style="width: 100%;">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('assets/img/team/team-3.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0">Nama</p>
                    </div>
                    <div style="background-color: #d9d9d9">
                        <div class="py-4">
                            @include('components.slider')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-9 mt-5">
                    <div class="card w-100" style="background-color: #008DDA; padding: 10px;">
                        <h2 class="text-dark mb-4 text-start fw-bold">Bantuan</h2>
                        <div class="row">
                            <!-- Card 1: Panduan Mendaftar Magang -->
                            <div class="col-md-4">
                                <div class="card border-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-white" style="background-color: #074173">
                                        Panduan Mendaftar Magang
                                    </div>
                                    <div class="car-body text-dark text-start p-2">
                                        <ul>
                                            <li>
                                                Pilih perusahaan
                                            </li>
                                            <li class="mt-2">
                                                Cari Informasi/Detail perusahaan
                                            </li>
                                            <li class="mt-2">
                                                Siapkan CV/Surat Lamaran
                                            </li>
                                            <li class="mt-2">
                                                Kirim Lamaran
                                            </li>
                                            <li class="mt-2">
                                                Ikuti proses seleksi termasuk : Wawancara, Tes Pengetahuan dll.
                                            </li>
                                            <li class="mt-2">Menunggu respon dari perusahaan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2: Panduan Mendaftar Magang -->
                            <div class="col-md-4">
                                <div class="card border-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-white" style="background-color: #074173">
                                        Edit Profil
                                    </div>
                                    <div class="car-body text-dark text-start p-2">
                                        <ul>
                                            <li>
                                                Nama Lengkap : Masukkan nama lengkap anda
                                            </li>
                                            <li class="mt-2">
                                                No Handpone : Pastikan memberikan No. Hp yang anda gunakan saat ini.
                                            </li>
                                            <li class="mt-2">
                                                Email : Masukkan email yang aktif dan pastikan selalu mengecek emailnya
                                            </li>
                                            <li class="mt-2">
                                                Alamat : Di bagian alamat anda berdasarkan ktp anda
                                            </li>
                                            <li class="mt-2">
                                                Social Media : Masukkan username social media anda instagram atau facebook
                                            </li>
                                            <li class="mt-2">
                                                Foto Profil : Pilih tulisan choose file untuk memilih foto terbaru anda
                                            </li>
                                            <li class="mt-2">
                                                Gender : Pilih Jenis kelamin anda
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3: Panduan Mendaftar Magang -->
                            <div class="col-md-4">
                                <div class="card border-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-white" style="background-color: #074173">
                                        Curiculum Vitae (CV)
                                    </div>
                                    <div class="car-body text-dark text-start p-2">
                                        <ul>
                                            <li>
                                                Menyampailkan Informasi Pribadi
                                            </li>
                                            <li class="mt-2">
                                                Merangkum Riwayat Pendidikan
                                            </li>
                                            <li class="mt-2">
                                                Menggambarkan Pengalaman Kerja
                                            </li>
                                            <li class="mt-2">
                                                Menyoroti Keterampilan dan Kualifikasi
                                            </li>
                                            <li class="mt-2">
                                                Memberikan Gambaran tentang Kepribadian
                                            </li>
                                            <li class="mt-2">
                                                Format yang Bersih dan Mudah Dibaca
                                            </li>
                                            <li class="mt-2">
                                                Adaptasi Terhadap Posisi yang Dilamar
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4: Panduan Mendaftar Magang -->
                            <div class="col-md-4">
                                <div class="card border-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-white" style="background-color: #074173">
                                        Lupa Password ?
                                    </div>
                                    <div class="car-body text-dark text-start p-2">
                                        <ul>
                                            <li>
                                                Temukan Opsi "Lupa Password"
                                            </li>
                                            <li class="mt-2">
                                                Verifikasi Identitas
                                            </li>
                                            <li class="mt-2">
                                                Dapatkan Tautan atau Kode Verifikasi
                                            </li>
                                            <li class="mt-2">
                                                Pilih Kata Sandi Baru
                                            </li>
                                            <li class="mt-2">
                                                Konfirmasi Perubahan
                                            </li>
                                            <li class="mt-2">
                                                Format yang Bersih dan Mudah Dibaca
                                            </li>
                                            <li class="mt-2">
                                                Masuk Kembali
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
