@extends('layouts.perusahaan')

@section('main-content')
    <h1 class="font-koulen">Detail Lamaran</h1>

    <div class="w-100">
        <div class="d-flex justify-content-center align-items-center w-100">
            <h3>
                Nama: {{ $lamaran->user->name }}
            </h3>
            <h3>
                CV: <a href="">Download</a>
            </h3>
        </div>
        <div>
            <h3>
                Lowongan: {{ $lamaran->lowongan->judul }}
            </h3>
        </div>
        <div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Mengapa Anda tertarik dengan posisi magang ini ?</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5">{{ $lamaran->pertanyaan1 }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="kualifikasi" class="form-label">Berapa gaji yang Anda harapkan untuk posisi magang ini?</label>
                        <textarea class="form-control" name="kualifikasi" id="kualifikasi" rows="5">{{ old('kualifikasi') }}</textarea>
                        @error('kualifikasi')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="w-50">
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi
                        Pekerjaan</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
