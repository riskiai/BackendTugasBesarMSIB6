<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfilPerusahaanRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class DashboardPerusahaanController extends Controller
{
    public function index()
    {
        return view('dashboardPerusahaan.dashboard-awal');
    }

    public function perusahaan()
    {
        return view('dashboardPerusahaan.index');
    }

    public function editProfil()
    {
        $company = auth()->guard('company')->user();
        return view('dashboardPerusahaan.edit-profil', compact('company'));
    }

    public function updateProfil(UpdateProfilPerusahaanRequest $request)
    {
        $company = Company::find(auth()->guard('company')->user()->id);

        $company->update($request->validated());

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
