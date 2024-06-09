@extends('layouts.app')
@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="" class="bordered-img" />
            <div class="overlay">
                <div class="container-fluid" style="margin-top: -50px;">
                    <div class="container my-3 py-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container my-3 py-5 mx-auto">
                                        <div class="row justify-content-between">
                                            <!-- Item 1 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content">
                                                        <img src="{{ asset('assets/img/webinar_masuk.png') }}"
                                                            alt="Deskripsi Gambar"
                                                            style="width: 295px; height: 200px; border: 2px solid white; background-color: white;" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content" style="color: #000000;">
                                                        <h4 class="card-title">
                                                            {{ strtoupper($webinar->judul_webinar) }}
                                                        </h4>
                                                        <p style="font-size: 12px;">{{ $webinar->company->name }}</p>
                                                        <div id="visi-konten" style="margin-top: 10px;">
                                                            <h6>Narasumber: {{ $webinar->narasumber }}</h6>
                                                            <p style="font-size: 12px;">({{ $webinar->jabatan_narasumber }})
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="col-lg-4 mb-4">
                                                <div class="visi-container">
                                                    <div class="visi-content"
                                                        style="background-color: #074173; color: white; width: 470px; height: 204px; border: 2px solid white; border-radius: 5px;">
                                                        <h6 class="card-title"
                                                            style="display: flex; align-items: center; justify-content: center; margin-top: 10px;">
                                                            Detail Webinar:</h6>
                                                        <div style="font-size: 12px; margin-top: 20px; margin-left: 30px;">
                                                            <p>Tanggal: {{ date('d/m/y', strtotime($webinar->tanggal)) }}
                                                            </p>
                                                            <p style="margin-top: -5px;">Waktu:
                                                                {{ date('g:i A', strtotime($webinar->waktu_mulai)) }} -
                                                                {{ date('g:i A', strtotime($webinar->waktu_selesai)) }}
                                                                (GMT+7)
                                                            </p>
                                                            <p style="margin-top: -5px;">Lokasi: {{ $webinar->lokasi }}</p>
                                                            {{-- kalau lokasi webinar online, tunjukkan platform --}}
                                                            @if ($webinar->lokasi == 'Online')
                                                                <p style="margin-top: -5px;">Platform:
                                                                    {{ $webinar->platform }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="margin-top: -80px;">
                            <h5>{{ $webinar->tagline }}</h5>
                            <h6>Deskripsi:</h6>
                            <p style="font-size: 12px;">{{ $webinar->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
