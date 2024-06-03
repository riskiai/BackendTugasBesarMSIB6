@extends('layouts.guest')

@section('content')
    <section class="container">
        <div class="container text-center m-0 p-0">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-md-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3">
                        <div class="mx-auto rounded-circle bg-secondary" style="height: 100px; width: 100px;">
                            <img class="rounded-circle" src="{{ asset('asset/img/team/team-3.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-white">Nama</p>
                    </div>
                    <div class="bg-light">
                        @include('components.slider')
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-md-9 d-flex flex-column justify-content-center gap-5">
                    <div>
                        <table class="table table-striped table-bordered border-dark">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">12345</th>
                                    <td>Alberto</td>
                                    <td>Sabtu, 20 April 2024</td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="" class="text-danger text-decoration-none">Hapus</a>
                                            <a href="" class="text-primary text-decoration-none">Tambahkan</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-3">
                            <img src="./asset/img/business-bag.png" alt="business bag" width="25px">
                            <h6 class="text-start pt-2">Lowongan Magang Disimpan</h6>
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered border-dark">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Magang</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
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
