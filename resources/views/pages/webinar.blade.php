@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="row">
            @foreach ($webinars as $webinar)
                <div class="col-md-4 mb-4 d-flex justify-content-center">
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
