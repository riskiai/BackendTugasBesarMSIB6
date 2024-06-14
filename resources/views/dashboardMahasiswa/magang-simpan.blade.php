@extends('layouts.app')

@section('content')
    <section class="container-fluid">
        <div class="text-center p-0 w-100">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-md-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white text-center">
                        <div class="mx-auto rounded-circle bg-secondary d-flex justify-content-center align-items-center"
                            style="height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('assets/img/team/team-3.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0">Nama</p>
                    </div>
                    <div class="bg-secondary">
                        <div class="py-4">
                            @include('components.slider')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-md-9 mt-5">
                    {{-- Lowongan Tersimpan start --}}
                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('./assets/img/business-bag.png') }}" alt="business bag" width="25px">
                            <h6 class="text-start pt-2">Lowongan Disimpan</h6>
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered border-dark">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Lowongan</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($savedLowongans as $savedLowongan)
                                    <tr>
                                        <td scope="row">
                                            <a
                                                href="{{ route('lowongan.detail', ['lowongan' => $savedLowongan->lowongan->id]) }}">
                                                {{ $savedLowongan->lowongan->judul }}
                                            </a>
                                        </td>
                                        <td>{{ $savedLowongan->lowongan->company->name }}</td>
                                        <td>
                                            {{ $savedLowongan->lowongan->lokasi ?? 'Online' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Lowongan Tersimpan end --}}
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
