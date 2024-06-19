@extends('layouts.app')

{{-- <style>
    ::placeholder {
        color: white !important;
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: white !important;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: white !important;
    }

    .no-outline:focus {
        outline: none;
        box-shadow: none;
        /* Optional: This removes any box shadow (if any) that might be applied on focus */
    }
</style> --}}

@section('content')
    {{-- <section class="mt-5 d-flex justify-content-center">
        <div class="w-25 rounded-4 d-flex align-items-center p-3" style="background-color:  #074173">
            <div class="w-100 h-100 rounded-4">
                <form action="{{ route('lowongan.search') }}" method="GET" class="form-search d-flex justify-content-between align-items-center gap-5 w-100" data-aos="fade-up"
                    data-aos-delay="200"
                    style="background-color: #074173; position: relative; max-width: 500px; border-radius: 10px;">
                    <input name="query" type="search" class="form-control py-3 m-0 no-outline"
                        placeholder="Cari Lowongan"
                        style="background-color: white; border: none; border-radius: 10px;" />
                    <button class="btn btn-light btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </section> --}}

    <div class="d-flex flex-column justify-content-center">
        <section>
            <div class="container my-3">
                <div class="row justify-content-between mx-auto">
                    @foreach ($lowongans as $lowongan)
                        <div class="col-lg-4 my-4">
                            <div class="card border-0 p-4 text-white" style="background-color: #074173;">
                                <div class="d-flex align-items-start">
                                    <img src="{{ $lowongan->company->foto_profil ? asset('storage/photo-profile/' . $lowongan->company->foto_profil) :  asset('assets/img/visi.png') }}" alt="Deskripsi Gambar"
                                        class="rounded-circle border border-primary me-3" style="width: 20%;" />
                                    <div class="d-flex flex-column">
                                        <h5 class="card-title fw-bold">{{ $lowongan->judul }}</h5>
                                        <div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="{{ asset('assets/img/marketeq.png') }}"
                                                    alt="Logo" class="me-2" />
                                                <p class="mb-0">{{ $lowongan->company->name }}</p>
                                            </div>
                                            <p class="m-0 ps-4" style="font-size: 0.9rem">
                                                {{ 'Rp' . number_format($lowongan->gaji, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex flex-column align-items-start">
                                    <div class="w-100 d-flex align-items-center my-3">
                                        <img src="{{ asset('assets/img/location.png') }}" alt="Location Icon"
                                            class="me-2" />
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <p class="mb-0">
                                                {{ $lowongan->lokasi ? $lowongan->lokasi : 'Online' }}
                                            </p>
                                            <p class="mb-0">
                                                Tipe: {{ $lowongan->jenis }}
                                            </p>
                                        </div>
                                    </div>
                                    <a href="/lowongan/{{ $lowongan->id }}" class="btn mt-2 w-50 rounded-5 text-white"
                                        style="background-color: #008DDA">Detail Lengkap</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mt-2">
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $lowongans->links() }}
            </div>
        </section>
    </div>
@endsection
