@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid" style="margin-top: -50px;">
            <div class="container my-5">
                <div class="container my-3 py-5 mx-auto">
                    <div class="row justify-content-between">
                        <!-- Item 1 -->
                        <div class="col-lg-4">
                            <div class="visi-container">
                                <div class="visi-content">
                                    <img src="{{ asset('assets/img/webinar_masuk.png') }}" alt="Deskripsi Gambar"
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
                                <div class="w-100 rounded mb-2"
                                    style="background-color: #074173; width: 100%; color: white; border: 2px solid white; border-radius: 5px;">
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
                                <form action="{{ route('webinar.register', ['webinar' => $webinar->id]) }}" method="POST">
                                    @csrf
                                    @auth
                                        @if (in_array($webinar->id, $registeredWebinars))
                                            <button type="submit" class="btn text-white w-100 text-center fw-semibold mb-2"
                                                style="background-color: #ff5483">Batalkan
                                                Pendaftaran</button>
                                        @else
                                            <button type="submit" class="btn w-100 text-white fw-semibold mb-2"
                                                style="background-color: #074173">Daftar</button>
                                        @endif
                                    @else
                                        <button type="submit" class="btn w-100 text-white fw-semibold mb-2"
                                            style="background-color: #074173">Daftar</button>
                                    @endauth

                                </form>
                                @auth
                                    @if (in_array($webinar->id, $registeredWebinars))
                                        <div class="alert alert-success text-center" role="alert" style="font-size: 0.8rem">
                                            Anda sudah terdaftar pada Webinar ini.
                                        </div>
                                    @else
                                        <div class="alert alert-danger text-center" role="alert" style="font-size: 0.8rem">
                                            Anda belum terdaftar pada Webinar ini.
                                        </div>
                                    @endif
                                @else
                                    <div class="alert alert-danger text-center" role="alert" style="font-size: 0.8rem">
                                        Anda belum terdaftar pada Webinar ini.
                                    </div>
                                @endauth

                                @if (session('success'))
                                    <!-- Modal Pendaftaran Webinar -->
                                    <div class="modal fade" id="webinarRegistrationModal" tabindex="-1"
                                        aria-labelledby="webinarRegistrationModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex justify-content-between">
                                                    <h1 class="modal-title fs-5" id="webinarRegistrationModalLabel">
                                                        Informasi</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- alert success berisi "Anda telah terdaftar ke webinar ini. Cek email untuk informasi lebih lanjut." --}}
                                                    <div class="alert alert-success" role="alert"
                                                        style="font-size: 0.8rem">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" style="margin-top: -120px;">
                    <h5>{{ $webinar->tagline }}</h5>
                    <h6>Deskripsi:</h6>
                    <p style="font-size: 12px;">{{ $webinar->deskripsi }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
