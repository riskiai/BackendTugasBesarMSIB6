@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="mb-3 font-koulen">Buat Webinar Baru</h1>
        <div>
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

            <form action="{{ route('perusahaan.webinar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gap-5">
                    <div class="col">
                        <div class="mb-3">
                            <label for="judulWebinar" class="form-label">Judul Webinar:</label>
                            <input type="text" name="judul_webinar" class="form-control rounded-4" style="background-color: #EEF5FF" placeholder="Masukkan judul webinar" id="judulWebinar" value="{{ old('judul_webinar') }}" required>
                            @error('judul_webinar')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="tagline" class="form-label">Tagline
                                Webinar:</label>
                            <input type="text" name="tagline" class="form-control rounded-4" style="background-color: #EEF5FF" placeholder="Masukkan tagline webinar" id="tagline" value="{{ old('tagline') }}" required>
                            @error('tagline')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="narasumber" class="form-label">Narasumber:</label>
                            <input type="text" name="narasumber" class="form-control rounded-4" style="background-color: #EEF5FF" placeholder="Masukkan narasumber webinar" id="narasumber" value="{{ old('narasumber') }}" required>
                            @error('narasumber')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="jabatan_narasumber" class="form-label">Jabatan
                                Narasumber:</label>
                            <input type="text" name="jabatan_narasumber" class="form-control rounded-4" style="background-color: #EEF5FF" placeholder="Masukkan jabatan narasumber webinar" id="jabatan_narasumber" value="{{ old('jabatan_narasumber') }}" required>
                            @error('jabatan_narasumber')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="deskripsi" class="form-label">Deskripsi Webinar:</label>
                            <textarea class="form-control rounded-4" style="background-color: #EEF5FF" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi webinar" rows="2">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 ">
                            <label for="poster" class="form-label">Poster Webinar:</label>
                            <input type="file" name="poster" class="form-control rounded-4" style="background-color: #EEF5FF" id="poster">
                            @error('poster')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">Detail Webinar:</label>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <label for="tanggal" class="form-label">Tanggal:</label>
                                    <input type="date" name="tanggal" class="form-control rounded-4" style="background-color: #EEF5FF" id="tanggal" value="{{ old('tanggal') }}" required>
                                    @error('tanggal')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <label for="waktu" class="form-label">Waktu Mulai:</label>
                                    <input type="time" name="waktu_mulai" class="form-control rounded-4" style="background-color: #EEF5FF" id="waktu" value="{{ old('waktu_mulai') }}" required>
                                    @error('waktu_mulai')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="waktu" class="form-label">Waktu Selesai:</label>
                                    <input type="time" name="waktu_selesai" class="form-control rounded-4" style="background-color: #EEF5FF" id="waktu" value="{{ old('waktu_selesai') }}" required>
                                    @error('waktu_selesai')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <label for="platform" class="form-label">Platform:</label>
                                    <input type="text" name="platform" class="form-control rounded-4" style="background-color: #EEF5FF" id="platform" placeholder="Masukkan platform webinar" value="{{ old('platform') }}" required>
                                    @error('platform')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div id="buttons" class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-danger" style="visibility: hidden">Submit</button>
                                <button type="submit" class="btn text-white"
                                    style="border-radius: 20px; background-color: #074173">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
