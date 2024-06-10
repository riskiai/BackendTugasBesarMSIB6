<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return redirect()->route('beranda');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // periksa apakah user adalah admin
            if (Auth::user()->roles[0]->name == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('mahasiswa.index');
        } elseif (Auth::guard('company')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('perusahaan.index');
        } else {
            return redirect()->route('login')->with('error', 'Login failed! Email or password is incorrect.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function registerUser()
    {
        return view('auth.register');
    }

    public function storeUser(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        $user->assignRole('user');

        return redirect()->route('login')->with('success', 'Registrasi user berhasil! Silakan login.');
    }

    public function registerPerusahaan()
    {
        return view('auth.auth-perusahaan');
    }

    public function storePerusahaan(RegisterRequest $request)
    {
        $user = Company::create($request->validated());

        $user->assignRole('company');

        return redirect()->route('login')->with('success', 'Registrasi perusahaan berhasil! Silakan login.');
    }
}
