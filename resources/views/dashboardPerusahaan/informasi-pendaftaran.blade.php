@extends('layouts.master')

@section('content')
    <section>
        <div class="container p-0" style="width: 100%;">
            <div class="row">
                <!-- sidebar start -->
                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-center">Nama</p>
                    </div>
                    <div style="background-color: #d9d9d9">
                        <div class="py-4 text-center">
                            @include('components.slider-perusahaan')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-9 mt-5 rounded" style="background-color: #074173">
                    <div class="card w-100">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-2 text-center">Daftar Pendaftar</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead class="bg-primary text-white" style="background-color: #008DDA;">
                                    <tr style="background-color: #008DDA;">
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Pendaftar</th>
                                        <th scope="col">Posisi yang dilamar</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Juan Rindengan</td>
                                        <td>IT Support</td>
                                        <td>Diproses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card w-100 mt-5">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-2 text-center">Dokumen Pendukung</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead class="bg-primary text-white" style="background-color: #008DDA;">
                                    <tr style="background-color: #008DDA;">
                                        <th scope="col"></th>
                                        <th scope="col">ID</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Curiculum Vitae (CV)</td>
                                        <td scope="row">1</td>
                                        <td>
                                            <a href="#" class="btn btn-dark btn-sm">Unduh CV</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
