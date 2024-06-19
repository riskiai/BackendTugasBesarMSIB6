@extends('layouts.app')
@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="" class="bordered-img" />
            <div class="overlay">
                <div class="container">
                    <div class="text mt-5">
                        <h2 class="overlay-text">
                            {{ $artikel->judul }}
                        </h2>
                        <div class="date-and-content">
                            <h6>
                                {{ $artikel->created_at->diffForHumans() }}
                            </h6>
                            {!! $artikel->konten !!}
                        </div>
                    </div>
                </div>

                <div class="image-container">
                    <img src="{{ asset('assets/img/gambarartikel 1.png') }}" alt="Deskripsi Gambar" class="side-image" />
                </div>
            </div>
        </div>
    </section>
@endsection
