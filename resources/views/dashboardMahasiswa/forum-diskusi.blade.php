@extends('layouts.guest')

@section('content')
    <section class="container-fluid">
        <div class="text-center p-0 w-100">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-md-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white text-center">
                        <div class="mx-auto rounded-circle bg-secondary d-flex justify-content-center align-items-center"
                            style="height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('asset/img/team/team-3.jpg') }}" alt=""
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
                    <div class="card w-100" style="background-color: #008DDA; padding: 10px;">
                        <h2 class="text-dark mb-4 text-start fw-bold">Forum Diskusi</h2>
                        <div class="row">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
