@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 40px">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 text-center" style="position: relative">
                <h1 class="fw-bold">FAQ</h1>
                <hr
                    style="
            width: 100px;
            border-top: 2px solid #000;
            position: relative;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 5px; /* Menambahkan margin atas */
          " />

                <img src="{{ asset('assets/img/FAQ.png') }}" alt="Search" class="img-fluid" />
            </div>


            <div class="col-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-white collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background-color: #074173">
                                Apa itu program magang?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Program magang adalah suatu program di mana seseorang,biasanya seorang pelajar atau
                                mahasiswa bekerja di sebuag perusahaan atau organisasi untuk mendapatkan pengalaman kerja
                                praktis dalam bidang yang di minati atau dengan sesuai dengan jurusan studinya.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-white collapsed" type="button" data-bs-toggle="collapse" style="background-color: #074173"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa manfaat mengikuti program magang?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Program magang memberikan manfaat berupa pengalaman kerja praktis, peluang untuk memperluas
                                jaringan profesional, pembelajaran langsung dari para ahli industri, pengembangan
                                keterampilan kerja, serta peningkatan peluang kerja di masa depan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-white collapsed" type="button" data-bs-toggle="collapse" style="background-color: #074173"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah program magang ini berbayar?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tergantung pada programnya. Beberapa magang bersifat berbayar, sementara yang lain mungkin
                                tidak.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button text-white collapsed" type="button" data-bs-toggle="collapse" style="background-color: #074173"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apakah program magang ini bersertifikat?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Iya, banyak magang yang menawarkan sertifikasi yang dapat meningkatkan kredibilitas dan
                                nilai tambah bagi peserta.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
