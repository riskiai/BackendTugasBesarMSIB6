@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="mb-3 font-koulen">Edit Lowongan Magang</h1>
        <div>

            {{-- display success after update process --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- display error after update process --}}
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

            <form action="{{ route('perusahaan.magang.update', ['lowongan' => $lowongan->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control rounded-4"
                                style="background-color: #EEF5FF" id="Judul" placeholder="Masukkan Judul"
                                value="{{ $lowongan->judul }}">
                            @error('judul')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Lokasi" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control rounded-4"
                                style="background-color: #EEF5FF" id="Lokasi"
                                placeholder="Lokasi (Kosongkan apabila online)" value="{{ $lowongan->lokasi }}">
                            @error('lokasi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Tipe" class="form-label">Tipe</label>
                            <select class="form-select rounded-4" name="tipe" id="Tipe"
                                style="background-color: #EEF5FF" value="{{ old('tipe') }}">
                                <option>Pilih Tipe</option>
                                <option {{ $lowongan->tipe == 'onsite' ? 'selected' : '' }} value="onsite">Onsite</option>
                                <option {{ $lowongan->tipe == 'hybrid' ? 'selected' : '' }} value="hybrid">Hybrid</option>
                                <option {{ $lowongan->tipe == 'online' ? 'selected' : '' }} value="online">Online</option>
                            </select>
                            @error('tipe')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" name="gaji" class="form-control rounded-4"
                                style="background-color: #EEF5FF" id="gaji" placeholder="Gaji"
                                value="{{ $lowongan->gaji }}">
                            @error('gaji')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi
                                Pekerjaan</label>
                            <textarea class="form-control rounded-4" style="background-color: #EEF5FF" name="deskripsi" id="deskripsi"
                                rows="3">{{ $lowongan->deskripsi }}</textarea>
                            @error('deskripsi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="Deadline" class="form-label">Deadline Penutupan Pendaftaran</label>
                            <input type="date" name="deadline" class="form-control rounded-4"
                                style="background-color: #EEF5FF" id="Deadline" value="{{ $lowongan->deadline }}">
                            @error('deadline')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kualifikasi" class="form-label">Kualifikasi</label>
                            <textarea class="form-control rounded-4" style="background-color: #EEF5FF" name="kualifikasi" id="kualifikasi"
                                rows="3">{{ $lowongan->kualifikasi }}</textarea>
                            @error('kualifikasi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <h3 class="text-center">Periode Kegiatan</h3>
                            <div class="d-flex justify-content-between">
                                <div class="mb-3" style="width: 45%">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control rounded-4"
                                        style="background-color: #EEF5FF" id="tanggal_mulai"
                                        value="{{ $lowongan->tanggal_mulai }}">
                                    @error('tanggal_mulai')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" style="width: 45%">
                                    <label for="tanggal_berakhir" class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_berakhir" class="form-control rounded-4"
                                        style="background-color: #EEF5FF" id="tanggal_berakhir"
                                        value="{{ $lowongan->tanggal_berakhir }}">
                                    @error('tanggal_berakhir')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
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
