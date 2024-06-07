<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProfilPerusahaanRequest;

class DashboardPerusahaanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data perusahaan yang sedang login
        $company = auth()->guard('company')->user();

        // Pastikan bahwa $company adalah instance dari model Company
        if ($company instanceof Company) {
            return view('dashboardPerusahaan.dashboard-awal', compact('company'));
        } else {
            // Jika bukan perusahaan, redirect atau lakukan tindakan lain
            return redirect()->route('login')->with('error', 'Anda harus login sebagai perusahaan.');
        }

    }

    public function perusahaan(Request $request)
    {
        // Ambil data perusahaan yang sedang login
        $company = auth()->guard('company')->user();

        // Pastikan bahwa $company adalah instance dari model Company
        if ($company instanceof Company) {
            return view('dashboardPerusahaan.index', compact('company'));
        } else {
            // Jika bukan perusahaan, redirect atau lakukan tindakan lain
            return redirect()->route('login')->with('error', 'Anda harus login sebagai perusahaan.');
        }
    }

    public function editProfil()
    {
        $company = auth()->guard('company')->user();
        return view('dashboardPerusahaan.edit-profil', compact('company'));
    }

    public function updateProfil(UpdateProfilPerusahaanRequest $request)
    {
        $company = auth()->guard('company')->user();
    
        $company = Company::find($company->id);
        // Jika ada file foto profil yang diunggah
        if ($request->hasFile('foto_profil')) {
            // Hapus foto profil lama jika ada
            if ($company->foto_profil) {
                Storage::disk('public')->delete('photo-profile/' . $company->foto_profil);
            }
    
            // Simpan foto profil baru dengan nama yang spesifik
            $file = $request->file('foto_profil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('photo-profile', $filename, 'public');
            $company->foto_profil = $filename;
        }
    
        // Perbarui informasi perusahaan
        $company->phone = $request->phone;
        $company->website = $request->website;
        $company->industry = $request->industry;
        $company->instagram = $request->instagram;
        $company->facebook = $request->facebook;
        $company->employees = $request->employees;
        $company->address = $request->address;
    
        // Simpan perubahan
        $company->save();
    
        return redirect()->back()->with('success', 'Profil berhasil diupdate');
    }
    

    public function postingLowongan()
    {
        return view('dashboardPerusahaan.posting-lowogan');
    }

    public function pendaftaran()
    {
        return view('dashboardPerusahaan.informasi-pendaftaran');
    }

    public function webinar()
    {
        return view('dashboardPerusahaan.webinar');
    }
}
