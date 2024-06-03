@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto" style="margin-left: 30px">
                <div class="card shadow-sm p-3 border-0">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/Man.png') }}" width="250" height="267" alt=""
                                style="margin-top: 100px" />
                        </div>

                        <div class="col-md-7">
                            <div class="card-body">
                                <h4>Login</h4>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="masukkan email kamu" />
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1"
                                        placeholder="masukkan password" />
                                </div>
                                <div style="text-align: center; margin-top: 20px">
                                    <a href="{{ url('dashboard-mahasisswa') }}" type="button"
                                        class="btn btn-custom">Submit</a>
                                    <p style="margin-top: 5px; margin-bottom: 5px">
                                        Sudah memiliki akun?
                                    </p>
                                    <a href="{{ url('register') }}" type="button" class="btn btn-custom btn-masuk">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
