@extends('layouts.mahasiswa')

@section('main-content')
    <section>
        <h1 class="font-koulen">Lowongan Disimpan</h1>

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3" style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Perusahaan</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Lokasi
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($savedLowongans as $savedLowongan)
                        <tr style="vertical-align: middle">
                            <td class="px-0" scope="row" style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                <a href="{{ route('lowongan.detail', ['lowongan' => $savedLowongan->lowongan->id]) }}"
                                    class="text-decoration-none">
                                    <div class="ms-2 ps-3 d-flex align-items-center gap-3">
                                        <img src="{{ $savedLowongan->lowongan->company->foto_profil ? asset('storage/photo-profile/' . $savedLowongan->lowongan->company->foto_profil) : asset('assets/img/Building.png') }}"
                                            alt="" width="100px">
                                        <div>
                                            <p class="m-0 fs-5">{{ $savedLowongan->lowongan->judul }}</p>
                                            <p class="m-0 text-secondary">
                                                {{ 'Rp' . number_format($savedLowongan->lowongan->gaji, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5">{{ $savedLowongan->lowongan->company->name }}</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                {{ $savedLowongan->lowongan->lokasi ?? 'Online' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Lowongan Tersimpan end --}}
    </section>
@endsection
