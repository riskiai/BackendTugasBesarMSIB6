@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="container mt-3" style="margin-top: 0">
            <h1 class="text-center font-weight-bold" style="font-size: 40px; color: #333">
                WEBINAR
            </h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #074173">
                    <img src="{{ asset('asset/img/webinar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Singkat</h5>
                        <p class="card-text">
                            TechSolve Solutions, perusahaan teknologi terkemuka di Jakarta, mencari Analis Data Junior untuk
                            bergabung dengan timnya.
                        </p>
                        <a href="{{ url('detail-webinar') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #074173">
                    <img src="{{ asset('asset/img/webinar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Singkat</h5>
                        <p class="card-text">
                            TechSolve Solutions, perusahaan teknologi terkemuka di Jakarta, mencari Analis Data Junior untuk
                            bergabung dengan timnya.
                        </p>
                        <a href="{{ url('detail-webinar') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #074173">
                    <img src="{{ asset('asset/img/webinar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Singkat</h5>
                        <p class="card-text">
                            TechSolve Solutions, perusahaan teknologi terkemuka di Jakarta, mencari Analis Data Junior untuk
                            bergabung dengan timnya.
                        </p>
                        <a href="{{ url('detail-webinar') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
