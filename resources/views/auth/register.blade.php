@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-7 mx-auto" style="margin-left: 30px">
                <div class="card shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/Man.png') }}" width="250" height="267" alt=""
                                style="margin-top: 100px" />
                        </div>

                        <div class="col-md-7">
                            <div class="card-body">
                                <h4>Daftar</h4>
                                <form action="{{ route('register.user.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="masukkan nama kamu" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="masukkan email kamu" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="masukkan password" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Ketik ulang
                                            password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                            placeholder="masukkan ulang password kamu" />
                                    </div>
                                    <div style="text-align: center; margin-top: 20px">
                                        <button type="submit" class="btn btn-custom">Masuk</button>
                                        <p style="margin-top: 5px; margin-bottom: 5px">
                                            Sudah memiliki akun?
                                        </p>
                                        <a href="{{ route('login') }}" type="button" class="btn btn-custom btn-masuk">
                                            Masuk
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
