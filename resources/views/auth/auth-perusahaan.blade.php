@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg p-3 border-0">
                    <div class="card-body">
                        <h4>Daftar Sebagai Perusahaan</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mt-2 mb-2 text-primary text-center font-weight-bold">Informasi Perusahaan</p>
                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="companyName"
                                        placeholder="Masukkan nama perusahaan" />
                                </div>
                                <div class="mb-3">
                                    <label for="responsiblePerson" class="form-label">Nama Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="responsiblePerson"
                                        placeholder="Masukkan nama penanggung jawab" />
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label">No Handpone</label>
                                    <input type="text" class="form-control" id="phoneNumber"
                                        placeholder="Masukkan no handphone" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="mt-2 mb-2 text-primary text-center font-weight-bold">Informasi Login</p>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan email perusahaan" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Masukkan password" />
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Ketik ulang password</label>
                                    <input type="password" class="form-control" id="confirmPassword"
                                        placeholder="Masukkan ulang password kamu" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center">
                            <div class="col md-6">
                                <a href="{{ url('dashboard-perusahaan-awal') }}" type="button"
                                    class="btn btn-primary">Submit</a>
                            </div>
                            <div class="col md-6">
                                <p class="mt-3 mb-2">Sudah memiliki akun ? Silahkan Login</p>
                                <a href="{{ url('login') }}" type="button" class="btn btn-secondary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-5 d-flex  mt-5">
                    <img src="{{ asset('assets/img/Man.png') }}" class="img-fluid mt-5" alt="Man Image"
                        style="max-width: 250px; max-height: 267px;" />
                </div>
            </div>
        </div>
    </div>
@endsection
