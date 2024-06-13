@extends('layouts.app')

@section('content')
    <div class="w-100 h-100"
        style="position: fixed; no-repeat center center; background-size: cover; background-image: url('images/login-background.svg')">
        <div class="w-100 h-100 pb-5 d-flex flex-column justify-content-center align-items-center"
            style="background-color: rgba(30, 30, 30, 0.7)">
            <h2 class="text-white mb-4">APPRENTICE AND TECHNOLOGY</h2>

            {{-- error message --}}
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm p-3 border-0 mb-4" style="min-width: 500px; background-color: #CEDDE6; border-radius: 20px">
                <h2 class="text-center font-koulen font-semibold">Login</h2>
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" style="background-color: #EEF5FF; border-radius: 20px" id="email"
                            placeholder="masukkan email kamu" />
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" style="background-color: #EEF5FF; border-radius: 20px" id="password"
                            placeholder="masukkan password" />
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div style="text-align: center; margin-top: 20px">
                        <button type="submit" class="text-white font-koulen px-5 fs-5 mb-2" style="background-color: #074173; border-radius: 20px;">MASUK</button>
                        <p style="margin-top: 5px; margin-bottom: 5px">
                            Sudah memiliki akun?
                        </p>
                        <a href="{{ url('register') }}" type="button" class="btn btn-custom btn-masuk">
                            Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
