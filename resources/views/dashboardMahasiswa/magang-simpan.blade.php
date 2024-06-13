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
                    <div class="card w-100" style="background-color: #008DDA; padding: 10px;">
                        <table class="table table-striped table-bordered border-dark">
                            <thead class="bg-primary text-white" style="background-color: #008DDA;">
                                <tr style="background-color: #008DDA;">
                                    <th scope="col">Magang</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">12345</th>
                                    <td>Alberto</td>
                                    <td>Sabtu, 20 April 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
