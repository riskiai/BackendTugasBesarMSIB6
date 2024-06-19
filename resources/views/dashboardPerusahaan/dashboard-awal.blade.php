@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <div class="container text-center p-0" style="width: 100%;">
            <div class="row">
                <div class="d-flex w-100 justify-content-center">
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
                                                    <span class="ms-3"><i class="bi bi-people"></i> Jumlah Pendaftar Lowongan</span>
                                                </div>
                                                <span>{{ $applyCount }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div class="card border-primary">
                                            <div class="card-body d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                                    <span class="ms-3"><i class="bi bi-shop-window"></i> Jumlah Pendaftar
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
        </div>
    </section>
@endsection
