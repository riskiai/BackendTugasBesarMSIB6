@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="font-koulen">Dashboard</h1>

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Pendaftar Magang</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3" style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Gaji</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Nama</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2 text-center" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                CV
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($internApplications as $internApplication)
                        <tr style="vertical-align: middle">
                            <td class="px-0 text-secondary ps-4" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                {{ $loop->iteration }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $internApplication->lowongan->judul }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $internApplication->lowongan->gaji }}</td>
                            <td class="px-0 text-secondary fs-5">
                                <a href="{{ route('perusahaan.lamaran.detail', ['id' => $internApplication->id]) }}">
                                    {{ $internApplication->user->name }}
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                <div class="d-flex gap-3 justify-content-center">
                                    <a href="{{ asset('storage/cv/' . $internApplication->cv) }}" target="_blank"
                                        class="btn fw-bold px-4" style="background-color: #008DDA">Lihat</a>
                                    <a href="{{ asset('storage/cv/' . $internApplication->cv) }}" download
                                        class="btn fw-bold text-white" style="background-color: #074173">Download</a>
                                </div>
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
                <h5 class="text-start pt-2 ms-2 fw-bold">Pendaftar Kerja</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Gaji</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Nama</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2 text-center"
                                style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                CV
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workApplications as $workApplication)
                        <tr style="vertical-align: middle">
                            <td class="px-0 text-secondary ps-4" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                {{ $loop->iteration }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $workApplication->lowongan->judul }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $workApplication->lowongan->gaji }}</td>
                            <td class="px-0 text-secondary fs-5">
                                <a
                                    href="{{ route('perusahaan.lamaran.detail', ['id' => $workApplication->id]) }}">
                                    {{ $workApplication->user->name }}
                                </a>
                            </td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                <div class="d-flex gap-3 justify-content-center">
                                    <a href="{{ asset('storage/cv/' . $workApplication->cv) }}" target="_blank"
                                        class="btn fw-bold px-4" style="background-color: #008DDA">Lihat</a>
                                    <a href="{{ asset('storage/cv/' . $workApplication->cv) }}" download
                                        class="btn fw-bold text-white" style="background-color: #074173">Download</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Webinar Diikuti end --}}
    </section>
@endsection
