@extends('layouts.master')

@section('content')
    <section>
        <div class="container p-0" style="width: 100%;">
            <div class="row">
                {{-- display success after update process --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- display error after update process --}}
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <strong>{{ $errors->first() }}</strong>
                    </div>
                @endif

                <!-- sidebar start -->
                <div class="col-3 mt-4 p-0 border border-dark border-5 rounded">
                    <div class="bg-primary py-3 text-white">
                        <div class="mx-auto rounded-circle" style="background-color: #d9d9d9; height: 100px; width: 100px">
                            {{-- <img class="rounded-circle" src="{{ asset('assets/img/team/team-1.jpg') }}" alt=""
                                style="height: 100px; width: 100px;"> --}}
                            <img src="{{ $company->foto_profil ? asset('storage/photo-profile/' . $company->foto_profil) : asset('assets/img/team/team-1.jpg') }}" 
                                alt="Profil Picture" 
                                class="rounded-circle"  style="height: 100px; width: 100px;">
                        </div>
                        <p class="m-0 text-center">{{ $company->name }}</p>
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
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-2 text-center">Informasi Diri</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('perusahaan.profil.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Masukkan nama kamu" value="{{ $company->name }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">No. Telepon Penanggung Jawab</label>
                                            <input type="text" name="phone" class="form-control" id="hp" placeholder="Masukkan nomor handphone" value="{{ $company->phone }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="website" class="form-label">Website Perusahaan (Jika ada)</label>
                                            <input type="text" name="website" class="form-control" id="website"
                                                placeholder="Website Perusahaan (Jika ada)" value="{{ $company->website }}">
                                        </div>
                                        <div class="mt-5">
                                            <h6>Media Sosial</h6>
                                            <div class="mb-3">
                                                <label for="instagram" class="form-label">Instagram</label>
                                                <input type="text" name="instagram" class="form-control" id="instagram"
                                                    placeholder="Masukkan username Instagram"
                                                    value="{{ $company->instagram }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" name="facebook" class="form-control" id="facebook"
                                                    placeholder="Masukkan username Facebook"
                                                    value="{{ $company->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Masukkan email kamu" value="{{ $company->email }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="industry" class="form-label">Perusahaan di Bidang</label>
                                            <input type="text" name="industry" class="form-control" id="industry"
                                                placeholder="Masukkan Bidang dari perusahaan kamu"
                                                value="{{ $company->industry }}">
                                        </div>
                                        <div class="d-flex align-items-center gap-3 my-3">
                                            <div class="rounded-circle overflow-hidden" style="background-color: #d9d9d9; height: 100px; width: 100px;">
                                                <img src="{{ $company->foto_profil ? asset('storage/photo-profile/' . $company->foto_profil) : asset('assets/img/team/team-1.jpg') }}" 
                                                     alt="Profil Picture" 
                                                     class="img-fluid h-100 w-100 object-fit-cover">
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control form-control-sm" name="foto_profil" id="profilePicture" type="file">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employees" class="form-label">Jumlah Karyawan</label>
                                            <input type="text" name="employees" class="form-control" id="employees"
                                                placeholder="Masukkan Jumlah karyawan di perusahaan"
                                                value="{{ $company->employees }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Alamat</label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                placeholder="Masukkan alamat perusahaan" value="{{ $company->address }}">
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
