@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- error message --}}
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card shadow-lg p-3 border-0">
                    <div class="card-body">
                        <form action="{{ route('register.perusahaan.store') }}" method="POST">
                            @csrf
                            <h4>Daftar Sebagai Mitra Perusahaan</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mt-2 mb-2 text-primary text-center font-weight-bold">Informasi Perusahaan</p>
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Nama Perusahaan</label>
                                        <input type="text" name="name" class="form-control" id="companyName"
                                            placeholder="Masukkan nama perusahaan" value="{{ old('name') }}"/>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="responsiblePerson" class="form-label">Nama Penanggung Jawab</label>
                                        <input type="text" name="pic_name" class="form-control" id="responsiblePerson"
                                            placeholder="Masukkan nama penanggung jawab" value="{{ old('pic_name') }}"/>
                                        @error('pic_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">No Handpone</label>
                                        <input type="text" name="phone" class="form-control" id="phoneNumber"
                                            placeholder="Masukkan no handphone" value="{{ old('phone') }}"/>
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="mt-2 mb-2 text-primary text-center font-weight-bold">Informasi Login</p>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Masukkan email perusahaan" value="{{ old('email') }}"/>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Masukkan password" />
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Ketik ulang password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="confirmPassword" placeholder="Masukkan ulang password kamu" />
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col md-6">
                                    <p class="mt-3 mb-2">Sudah memiliki akun ? Silahkan Login</p>
                                    <a href="{{ url('login') }}" type="button" class="btn btn-secondary">Masuk</a>
                                </div>
                            </div>
                        </form>
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
