@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="mb-3 font-koulen">Buat Lowongan Kerja Baru</h1>
        <div>

            {{-- display success after create process --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- display error after create process --}}
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
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

            <form action="{{ route('perusahaan.kerja.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="Judul"
                                placeholder="Masukkan Judul" value="{{ old('judul') }}">
                            @error('judul')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Lokasi" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="Lokasi" placeholder="Lokasi"
                                value="{{ old('lokasi') }}">
                            @error('lokasi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Tipe" class="form-label">Tipe</label>
                            <select class="form-select" name="tipe" id="Tipe" value="{{ old('tipe') }}">
                                <option selected>Pilih Tipe</option>
                                <option value="onsite">Onsite</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="online">Online</option>
                            </select>
                            @error('tipe')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi
                                Pekerjaan</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" name="gaji" class="form-control" id="gaji" placeholder="Gaji"
                                value="{{ old('gaji') }}">
                            @error('gaji')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Deadline" class="form-label">Deadline Penutupan Pendaftaran</label>
                            <input type="date" name="deadline" class="form-control" id="Deadline"
                                value="{{ old('deadline') }}">
                            @error('deadline')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kualifikasi" class="form-label">Kualifikasi</label>
                            <textarea class="form-control" name="kualifikasi" id="kualifikasi" rows="3">{{ old('kualifikasi') }}</textarea>
                            @error('kualifikasi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="buttons" class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-danger" style="visibility: hidden">Submit</button>
                            <button type="submit" class="btn text-white"
                                style="border-radius: 20px; background-color: #074173">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
