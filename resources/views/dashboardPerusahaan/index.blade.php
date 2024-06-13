@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center m-0 p-0">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3">
                        <div class="mx-auto rounded-circle bg-secondary" style="height: 100px; width: 100px;">
                            <img class="rounded-circle" src="{{ asset('asset/img/team/team-3.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-white">{{ $company->name }}</p>
                    </div>
                    <div class="bg-light">
                        @include('components.slider-perusahaan')
                    </div>
                </div>
                <!-- sidebar end -->
                <div class="col align-items-center justify-content-center d-flex">
                    <a href="{{ url('dashboard-sahasiswa-profil') }}" class="btn btn-primary">
                        <img src="./asset/img/pen.png" alt="Icon" class="mx-1" />
                        Lengkapi Profile perusahaan
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
