@extends('layouts.app')

@section('content')
    <section>
        <div class="container p-0" style="width: 100%;">
            <div class="row">
                {{-- display success after add webinar --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- display error after add webinar --}}
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <strong>{{ $errors->first() }}</strong>
                    </div>
                @endif

                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-center">Nama</p>
                    </div>
                    <div style="background-color: #d9d9d9; height: 82%;">
                        <div class="py-4 text-center">
                            @include('components.slider-perusahaan')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-9 mt-5 rounded p-4" style="background-color: #074173">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-white">
                            <form action="{{ route('perusahaan.webinar.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center mb-3">Form Webinar Baru</h3>
                                <div class="mb-3 row">
                                    <label for="judulWebinar" class="col-sm-3 col-form-label">Judul Webinar:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="judul_webinar" class="form-control" id="judulWebinar">
                                        @error('judul_webinar')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tagline" class="col-sm-3 col-form-label">Tagline
                                        Webinar:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tagline" class="form-control" id="tagline">
                                        @error('tagline')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="narasumber" class="col-sm-3 col-form-label">Narasumber:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="narasumber" class="form-control" id="narasumber">
                                        @error('narasumber')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan_narasumber" class="col-sm-3 col-form-label">Jabatan
                                        Narasumber:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jabatan_narasumber" class="form-control"
                                            id="jabatan_narasumber">
                                        @error('jabatan_narasumber')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi Webinar:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2"></textarea>
                                        @error('deskripsi')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="poster" class="col-sm-3 col-form-label">Poster Webinar:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="poster" class="form-control" id="poster">
                                        @error('poster')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Detail Webinar:</label>
                                    <div class="col-sm-9">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <label for="tanggal" class="form-label">Tanggal:</label>
                                                <input type="date" name="tanggal" class="form-control" id="tanggal">
                                                @error('tanggal')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <label for="waktu" class="form-label">Waktu Mulai:</label>
                                                <input type="time" name="waktu_mulai" class="form-control"
                                                    id="waktu">
                                                @error('waktu_mulai')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="waktu" class="form-label">Waktu Selesai:</label>
                                                <input type="time" name="waktu_selesai" class="form-control"
                                                    id="waktu">
                                                @error('waktu_selesai')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="lokasi" class="form-label">Lokasi:</label>
                                                <input type="text" name="lokasi" class="form-control"
                                                    id="lokasi">
                                                @error('lokasi')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="platform" class="form-label">Platform:</label>
                                                <input type="text" name="platform" class="form-control"
                                                    id="platform">
                                                @error('platform')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
