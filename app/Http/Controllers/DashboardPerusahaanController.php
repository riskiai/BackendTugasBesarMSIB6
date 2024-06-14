<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWebinarRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProfilPerusahaanRequest;
use App\Models\Lowongan;
use App\Models\Webinar;

class DashboardPerusahaanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data perusahaan yang sedang login
        $company = auth()->guard('company')->user();

        // Menghitung jumlah lowongan yang dibuat perusahaan
        $lowonganCount = $company->lowongans->count();

        // Menghitung jumlah peserta webinar yang dibuat perusahaan
        $webinarAttendeeCount =
            Webinar::where('company_id', $company->id)
            ->join('register_webinars', 'webinars.id', '=', 'register_webinars.webinar_id')
            ->count();

        // Menghitung jumlah peserta yang apply ke lowongan yang dibuat perusahaan
        $applyCount =
            Lowongan::where('company_id', $company->id)
            ->join('apply_lowongans', 'lowongans.id', '=', 'apply_lowongans.lowongan_id')
            ->count();

        // Pastikan bahwa $company adalah instance dari model Company
        if ($company instanceof Company) {
            return view('dashboardPerusahaan.dashboard-awal', compact('company', 'lowonganCount', 'webinarAttendeeCount', 'applyCount'));
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
            $file->storeAs('photo-profile', $filename, 'public');
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

    public function createWebinar()
    {
        return view('dashboardPerusahaan.webinar');
    }

    public function storeWebinar(CreateWebinarRequest $request)
    {
        // Simpan data webinar baru
        $webinar = new Webinar();
        $webinar->company_id = auth()->guard('company')->user()->id;
        $webinar->judul_webinar = $request->judul_webinar;
        $webinar->narasumber = $request->narasumber;
        $webinar->jabatan_narasumber = $request->jabatan_narasumber;
        $webinar->tagline = $request->tagline;
        $webinar->deskripsi = $request->deskripsi;
        $webinar->tanggal = $request->tanggal;
        $webinar->waktu_mulai = $request->waktu_mulai;
        $webinar->waktu_selesai = $request->waktu_selesai;
        $webinar->platform = $request->platform;
        $webinar->lokasi = $request->lokasi;
        // poster belum ada
        $webinar->save();

        return redirect()->back()->with('success', 'Webinar berhasil dibuat');
    }
}
