@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="font-koulen">Daftar Webinar</h1>

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('perusahaan.webinar.create') }}" class="btn px-3 py-2 text-white rounded-pill"
                    style="background-color: #074173;">
                    Tambah Webinar
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Tanggal</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Judul Webinar</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Narasumber</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2 text-center" style="background-color: #EEF5FF;">Platform</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2 text-center" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Action
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($webinars as $webinar)
                        <tr style="vertical-align: middle">
                            <td class="px-0 text-secondary ps-4" scope="row"
                                style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                {{ $loop->iteration }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $webinar->tanggal }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $webinar->judul_webinar }}</td>
                            <td class="px-0 text-secondary fs-5">{{ $webinar->narasumber }}</td>
                            <td class="px-0 text-secondary fs-5 text-center">{{ $webinar->platform ? $webinar->platform : '-'}}</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                <div class="d-flex gap-3 justify-content-center">
                                    <a href="{{ route('perusahaan.webinar.edit', ['webinar' => $webinar->id]) }}" class="fw-semibold btn btn-warning px-4">Edit</a>
                                    <form action="{{ route('perusahaan.webinar.delete', ['webinar' => $webinar->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fw-semibold btn btn-danger">Delete</button>
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
