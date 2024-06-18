<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.tampilan-register');
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

    public function loginGoogle()
    {
        Log::info('Reached loginGoogle method');
        return Socialite::driver('google')->redirect();
    }

    public function loginGoogleCallback()
    {
        Log::info('Reached loginGoogleCallback method');

        try {
            $user = Socialite::driver('google')->user();
            Log::info($user);
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Login failed! ' . $e->getMessage());
        }

        $existingUser = User::where('google_id', $user->id)->first();
        if ($existingUser) {
            Auth::login($existingUser, true);
        } else {
            $newUser = new User();
            $newUser->google_id = $user->id;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->password = bcrypt('asdfasdf');
            $newUser->save();

            $newUser->assignRole('user');
            $newUser->save();

            Auth::login($newUser, true);
        }

        return redirect()->route('mahasiswa.index');
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        } elseif (Auth::guard('company')->check()) {
            Auth::guard('company')->logout();
        }

        // Invalidate the session and regenerate the token to avoid CSRF attacks
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function registerUser()
    {
        return view('auth.register');
    }

    public function storeUser(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = User::create($request->validated());
            $user->assignRole('user');
            DB::commit();
            return redirect()->route('login')->with('success', 'Registrasi user berhasil! Silakan login.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal mendaftar user');
        }
    }

    public function registerPerusahaan()
    {
        return view('auth.auth-perusahaan');
    }

    public function storePerusahaan(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = Company::create($request->validated());
            $user->assignRole('company');
            DB::commit();
            return redirect()->route('login')->with('success', 'Registrasi perusahaan berhasil! Silakan login.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal mendaftar perusahaan');
        }
    }
}
