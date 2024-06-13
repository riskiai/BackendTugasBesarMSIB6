@extends('layouts.app')

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
                <div class="col-9 mt-5">
                    <div class="card w-100">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-header bg-primary text-white">
                                            <p class="my-2 text-center">Khusus Mahasiswa Magang</p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="Judul"
                                                placeholder="Masukkan Judul">
                                        </div>
                                        <div class="d-flex align-items-center gap-3 my-3">
                                          
                                                <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}" alt=""
                                                style="height: 100px; width: 100px;">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="profilePicture"
                                                    type="file">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi
                                                Pekerjaan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Lokasi" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="Lokasi" placeholder="Lokasi">
                                        </div>
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">Kualifikasi</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    .....
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    ........
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Periode" class="form-label">Periode Kegiatan</label>
                                            <input type="text" class="form-control" id="Periode"
                                                placeholder="Periode Kegiatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Jenis" class="form-label">Jenis Pekerjaan</label>
                                            <input type="text" class="form-control" id="Jenis"
                                                placeholder="Jenis Pekerjaan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Tanggal" class="form-label">Tanggal Penutupan Kegiatan</label>
                                            <input type="date" class="form-control" id="Tanggal">
                                        </div>
                                        <div class="mb-3 d-flex justify-content-between">
                                            <button type="submit" class="btn btn-secondary">Batal</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card-header bg-primary text-white">
                                            <p class="my-2 text-center">Khusus Mahasiswa Freshgraduate</p>
                                        </div>
                                        <div class="mb-3 mt-5">
                                            <label for="judul" class="form-label">Judul Pekerjaan</label>
                                            <input type="text" class="form-control" id="judul"
                                                placeholder="Judul Pekerjaan">
                                        </div>
                                        <div class="d-flex align-items-center gap-3 my-3">
                                            <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}" alt=""
                                            style="height: 100px; width: 100px;">
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" id="profilePicture"
                                                    type="file">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi
                                                Pekerjaan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">Kualifikasi</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    .....
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    ........
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="mt-5">Detail Pekerjaan </h5>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="judul" class="form-label">Lokasi :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="judul"
                                                        placeholder="judul Pekerjaan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="Pekerjaan" class="form-label">Jenis Pekerjaan :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="Pekerjaan"
                                                        placeholder="Jenis Pekerjaan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="Insentif" class="form-label">Gaji atau Insentif :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="Insentif"
                                                        placeholder="Gaji atau Insentif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="Tanggal" class="form-label">Tanggal Mulai :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="date" class="form-control" id="Tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="Durasi" class="form-label">Durasi :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="time" class="form-control" id="Durasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="JenisPekerjaan" class="form-label">Jenis Pekerjaan
                                                        :</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="JenisPekerjaan"
                                                        placeholder="Jenis Pekerjaan">
                                                </div>
                                            </div>
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
