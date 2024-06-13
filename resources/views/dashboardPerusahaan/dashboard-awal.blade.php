@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center p-0" style="width: 100%;">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            <img src="{{ $company->foto_profil ? asset('storage/photo-profile/' . $company->foto_profil) : asset('assets/img/team/team-1.jpg') }}"
                                alt="Profil Picture" class="rounded-circle" style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-white">{{ $company->name }}</p>
                    </div>
                    <div style="background-color: #d9d9d9">
                        <div class="py-4">
                            @include('components.slider-perusahaan')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-9 mt-5">
                    <div class="card w-100" style="background-color: #074173; padding: 10px; height: 100%;">
                        <div class="container text-center p-0" style="width: 100%;">
                            <div class="row ">
                                <div class="col-md-6 mt-4">
                                    <div class="card border-primary border-2">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-briefcase fa-2x"></i>
                                                <span class="ms-3"><i class="bi bi-briefcase"></i> Jumlah Post
                                                    Lowongan</span>
                                            </div>
                                            <span>{{ $lowonganCount }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="card border-primary">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-users fa-2x"></i>
                                                <span class="ms-3"><i class="bi bi-people"></i> Jumlah Pendaftar</span>
                                            </div>
                                            <span>50</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="card border-primary">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                                <span class="ms-3"><i class="bi bi-shop-window"></i> Jumlah yang Mengikuti
                                                    Webinar</span>
                                            </div>
                                            <span>{{ $webinarAttendeeCount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
