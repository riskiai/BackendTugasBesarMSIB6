<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPerusahaaController extends Controller
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
        return view('dashboardPerusahaan.edit-profil');
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
