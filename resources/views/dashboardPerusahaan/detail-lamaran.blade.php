@extends('layouts.perusahaan')

@section('main-content')
    <h1 class="font-koulen">Detail Lamaran</h1>

    <div class="px-5">
        <div class="d-flex justify-content-between align-items-center w-100" style="color: #00143C">
            <h4>
                Nama: {{ $lamaran->user->name }}
            </h4>
            <h4>
                CV (Curriculum Vitae): <a href="{{ asset('storage/cv/' . $lamaran->cv) }}" download class="btn text-white rounded-5 px-3 py-2"
                    style="background-color: #074173">
                    Download
                    <i class="fa-solid fa-download"></i>
                </a>
            </h4>
        </div>
        <div class="d-flex justify-content-between align-items-center w-100" style="#00143C">
            <h5>
                Lowongan: {{ $lamaran->lowongan->judul }}
            </h5>
            <h5>
                Status:
                <span
                    @if ($lamaran->status == 'accepted') class="rounded-pill px-3 py-2 badge text-bg-success"
                                @elseif ($lamaran->status == 'rejected') class="rounded-pill px-3 py-2 badge text-bg-danger"
                                @else class="rounded-pill px-3 py-2 badge text-bg-warning" @endif>
                    {{ $lamaran->status }}
                </span>
            </h5>
        </div>
        <div class="mt-4 mb-2">
            <div class="row gap-5 justify-content-center">
                <div class="col">
                    <div class="mb-3 d-flex flex-column align-items-center">
                        <label for="deskripsi" class="form-label fw-semibold" style="color: #074173">Mengapa Anda tertarik
                            dengan posisi magang ini ?</label>
                        <textarea class="form-control rounded-4" style="max-width: 400px; background-color: #EEF5FF;" name="deskripsi"
                            id="deskripsi" rows="4">{{ $lamaran->pertanyaan1 }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 d-flex flex-column align-items-center">
                        <label for="kualifikasi" class="form-label fw-semibold" style="color: #074173">Berapa gaji yang Anda
                            harapkan untuk posisi magang ini?</label>
                        <textarea class="form-control rounded-4" style="max-width: 400px; background-color: #EEF5FF;" name="kualifikasi"
                            id="kualifikasi" rows="4">{{ $lamaran->pertanyaan2 }}</textarea>
                        @error('kualifikasi')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="w-50">
                <div class="mb-3 d-flex flex-column align-items-center">
                    <label for="deskripsi" class="form-label fw-semibold" style="color: #074173">Apa Keterampilan dan
                        Keahlian yang bisa diunggulkan?</label>
                    <textarea class="form-control rounded-4" style="max-width: 400px; background-color: #EEF5FF;" name="deskripsi"
                        id="deskripsi" rows="4">{{ $lamaran->pertanyaan3 }}</textarea>
                    @error('deskripsi')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex gap-5">
                <form action="{{ route('perusahaan.lamaran.tolak', ['id' => $lamaran->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn rounded-5 px-3 py-2"
                        style="background-color: white; color: #074173">Tolak</button>
                </form>
                <form action="{{ route('perusahaan.lamaran.terima', ['id' => $lamaran->id]) }}" method="POST">
                    @csrf
                    <button href="" class="btn rounded-5 px-3 py-2 text-white"
                        style="background-color: #074173">Terima</button>
                </form>
            </div>
        </div>
    </div>
@endsection
