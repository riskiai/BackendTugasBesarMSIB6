@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="font-koulen">Lowongan Magang</h1>

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            {{-- tombol "Tambah Lowongan Magang" --}}
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('perusahaan.magang.create') }}" class="btn px-3 py-2 text-white rounded-pill"
                    style="background-color: #074173;">
                    Tambah Lowongan Magang
                </a>
            </div>

            {{-- alert success --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- tabel lowongan magang --}}
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Deadline</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Tipe</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lokasi</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Gaji</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2 text-center"
                                style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Action
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongans as $lowongan)
                        <tr class="text-center" style="vertical-align: middle">
                            <td class="px-0 text-secondary ps-4" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                {{ $loop->iteration }}</td>
                            <td class="px-0 text-secondary fs-5">{{ date('d-m-Y', strtotime($lowongan->deadline)) }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $lowongan->judul }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $lowongan->tipe }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $lowongan->lokasi ? $lowongan->lokasi : 'Online' }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $lowongan->gaji }}</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                <div class="d-flex gap-3 justify-content-center">
                                    <a href="{{ route('perusahaan.magang.edit', ['lowongan' => $lowongan->id]) }}" class="btn btn-warning px-4 fw-semibold">Edit</a>
                                    <form action="{{ route('perusahaan.magang.delete', ['lowongan' => $lowongan->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger fw-semibold">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Lowongan Tersimpan end --}}
    </section>
@endsection
