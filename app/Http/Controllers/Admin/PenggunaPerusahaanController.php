<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunaPerusahaanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data perusahaan yang sedang login
        // $company = auth()->guard('company')->user();

        // Pastikan bahwa $company adalah instance dari model Company
        // if ($company instanceof Company) {
        //     return view('admin.pengguna.perusahaan.index', compact('company'));
        // } else {
        //     // Jika bukan perusahaan, redirect atau lakukan tindakan lain
        //     return redirect()->route('login')->with('error', 'Anda harus login sebagai perusahaan.');
        // }

        return view('admin.pengguna.perusahaan.index');

    }
}
