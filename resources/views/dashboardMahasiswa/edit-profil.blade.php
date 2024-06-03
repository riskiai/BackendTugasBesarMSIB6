@extends('layouts.guest')

@section('content')
    <section>
        <div class="container text-center p-0" style="width: 100%;">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-3 mt-5 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            <img class="rounded-circle" src="{{ asset('asset/img/team/team-3.jpg') }}" alt=""
                                style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0">Nama</p>
                    </div>
                    <div style="background-color: #d9d9d9">
                        <div class="py-4">
                            @include('components.slider')
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- main start -->
                <div class="col-9 mt-5">
                    <div class="card w-100">
                        <div class="card-header bg-primary text-white">
                            <h4 class="m-0">Informasi Diri</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Masukkan nama kamu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">Nomor Handphone</label>
                                            <input type="text" class="form-control" id="hp"
                                                placeholder="Masukkan nomor handphone">
                                        </div>
                                        <div class="mt-5">
                                            <h6>Media Sosial</h6>
                                            <div class="mb-3">
                                                <label for="instagram" class="form-label">Instagram</label>
                                                <input type="text" class="form-control" id="instagram"
                                                    placeholder="Masukkan username Instagram">
                                            </div>
                                            <div class="mb-3">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" class="form-control" id="facebook"
                                                    placeholder="Masukkan username Facebook">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Masukkan email kamu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="Masukkan alamat">
                                        </div>
                                        <div class="d-flex align-items-center gap-3 my-3">
                                            <div class="rounded-circle"
                                                style="background-color: #d9d9d9; height: 100px; width: 100px;"></div>
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="profilePicture"
                                                    type="file">
                                            </div>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center gap-3">
                                            <p class="m-0">Jenis Kelamin</p>
                                            <select class="form-select form-select-sm w-25">
                                                <option selected>Pilih</option>
                                                <option value="male">Laki-laki</option>
                                                <option value="female">Perempuan</option>
                                            </select>
                                        </div>
                                        <div id="buttons" class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-dark">Batal</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
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
