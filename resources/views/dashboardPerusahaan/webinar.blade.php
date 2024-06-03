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
                <div class="col-9 mt-5 rounded p-4" style="background-color: #074173">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-white">
                            <form>
                                <div class="mb-3 row">
                                    <label for="judulWebinar" class="col-sm-3 col-form-label">Judul Webinar:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="judulWebinar">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="subJudulWebinar" class="col-sm-3 col-form-label">Sub Judul
                                        Webinar:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="subJudulWebinar">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="speaker" class="col-sm-3 col-form-label">Speaker:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="speaker">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Detail Webinar:</label>
                                    <div class="col-sm-9">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <label for="tanggal" class="form-label">Tanggal:</label>
                                                <input type="date" class="form-control" id="tanggal">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="platform" class="form-label">Platform:</label>
                                                <input type="text" class="form-control" id="platform">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="waktu" class="form-label">Waktu:</label>
                                                <input type="time" class="form-control" id="waktu">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="lokasi" class="form-label">Lokasi:</label>
                                                <input type="text" class="form-control" id="lokasi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
@endsection
