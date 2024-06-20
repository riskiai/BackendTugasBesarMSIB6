@extends('layouts.mahasiswa')

@section('main-content')
    <section>
        <h1 class="font-koulen">Dashboard</h1>

        {{-- Lamaran Terkirim start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Lamaran Terkirim</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3" style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Jenis</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Perusahaan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lokasi</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Status
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appliedLowongans as $appliedLowongan)
                        <tr style="vertical-align: middle">
                            <td class="px-0" scope="row" style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                <a href="{{ route('lowongan.detail', ['lowongan' => $appliedLowongan->lowongan->id]) }}"
                                    class="text-decoration-none">
                                    <div class="ms-2 ps-3 d-flex align-items-center gap-3">
                                        <img class="rounded-circle" src="{{ $appliedLowongan->lowongan->company->foto_profil ? asset('storage/photo-profile/' . $appliedLowongan->lowongan->company->foto_profil) : asset('assets/img/Building.png') }}"
                                            alt="Foto Profil perusahaan" width="100px">
                                        <div>
                                            <p class="m-0 fs-5">{{ $appliedLowongan->lowongan->judul }}</p>
                                            <p class="m-0 text-secondary">
                                                {{ 'Rp' . number_format($appliedLowongan->lowongan->gaji, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5">{{ $appliedLowongan->lowongan->jenis }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $appliedLowongan->lowongan->company->name }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $appliedLowongan->lowongan->lokasi ?? 'Online' }}</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                <span
                                    @if ($appliedLowongan->status == 'accepted') class="rounded-pill px-3 py-2 badge text-bg-success"
                                @elseif ($appliedLowongan->status == 'rejected') class="rounded-pill px-3 py-2 badge text-bg-danger"
                                @else class="rounded-pill px-3 py-2 badge text-bg-warning" @endif>
                                    {{ $appliedLowongan->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Lamaran Terkirim end --}}

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Lowongan Disimpan</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                Deadline</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Jenis</div>
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
                            <td class="px-0 ms-2 ps-3 text-secondary" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                {{ date('d-m-Y', strtotime($savedLowongan->lowongan->deadline)) }}</td>
                            <td class="px-0 text-secondary fs-5">
                                <a href="{{ route('lowongan.detail', ['lowongan' => $savedLowongan->lowongan->id]) }}"
                                    class="text-decoration-none">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ $savedLowongan->lowongan->company->foto_profil ? asset('storage/photo-profile/' . $savedLowongan->lowongan->company->foto_profil) : asset('assets/img/Building.png') }}"
                                            alt="" width="100px">
                                        <div>
                                            <p class="m-0 fs-5">{{ $savedLowongan->lowongan->judul }}</p>
                                            <p class="m-0 text-secondary fs-6">
                                                {{ 'Rp' . number_format($savedLowongan->lowongan->gaji, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5">{{ $savedLowongan->lowongan->jenis }}</td>
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

        {{-- Webinar diikuti start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Webinar Diikuti</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                Tanggal</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Webinar</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Lokasi
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registeredWebinars as $registeredWebinar)
                        <tr style="vertical-align: middle">
                            <td class="px-0" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                <div class="ms-2 ps-3">
                                    {{ $registeredWebinar->webinar->tanggal }}
                                </div>
                            </td>
                            <td class="px-0 text-secondary fs-5">
                                <a href="/webinar/{{ $registeredWebinar->webinar->id }}" class="text-decoration-none">
                                    {{ $registeredWebinar->webinar->judul_webinar }}
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                {{ $registeredWebinar->webinar->lokasi ?? 'Online' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Webinar Diikuti end --}}
    </section>
@endsection
