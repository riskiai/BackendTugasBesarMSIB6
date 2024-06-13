@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="container mt-3" style="margin-top: 0">
            <h1 class="text-center font-weight-bold mb-3" style="font-size: 40px; color: #333">
                WEBINAR
            </h1>
        </div>
        <div class="row">
            @foreach ($webinars as $webinar)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem; background-color: #074173">
                        <img src="{{ asset('assets/img/webinar.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $webinar->judul_webinar }}</h5>
                            <p class="card-text">
                                {{ $webinar->deskripsi }}
                            </p>
                            <a href="webinar/{{$webinar->id}}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
