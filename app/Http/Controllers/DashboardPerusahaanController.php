<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWebinarRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProfilPerusahaanRequest;
use App\Models\ApplyLowongan;
use App\Models\Lowongan;
use App\Models\Webinar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        DB::beginTransaction();
        try {
            $company = Company::find(auth()->guard('company')->user()->id);

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

            DB::commit();
            return redirect()->back()->with('success', 'Profil berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal memperbarui profil');
            }
    }


    public function postingLowongan()
    {
        return view('dashboardPerusahaan.posting-lowogan');
    }

    public function lowonganMagang()
    {
        $company = auth()->guard('company')->user();
        $lowongans = Lowongan::where('company_id', $company->id)->where('jenis', 'magang')->get();
        return view('dashboardPerusahaan.lowongan-magang', compact('lowongans'));
    }

    public function createLowonganMagang()
    {
        return view('dashboardPerusahaan.posting-lowongan-magang');
    }

    public function lowonganKerja()
    {
        $company = auth()->guard('company')->user();
        $lowongans = Lowongan::where('company_id', $company->id)->where('jenis', 'kerja')->get();
        return view('dashboardPerusahaan.lowongan-kerja', compact('lowongans'));
    }

    public function createLowonganKerja()
    {
        return view('dashboardPerusahaan.posting-lowongan-kerja');
    }

    public function pendaftaran()
    {
        return view('dashboardPerusahaan.informasi-pendaftaran');
    }

    public function webinar()
    {
        $company = auth()->guard('company')->user();
        $webinars = Webinar::where('company_id', $company->id)->get();
        return view('dashboardPerusahaan.webinar', compact('webinars'));
    }
}
