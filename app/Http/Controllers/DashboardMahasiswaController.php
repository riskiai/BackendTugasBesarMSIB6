<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        return view('dashboardMahasiswa.index');
    }

    public function dashboardAwal()
    {
        return view('dashboardMahasiswa.dashboard-awal');
    }

    public function editProfil()
    {
        return view('dashboardMahasiswa.edit-profil');
    }

    public function bantuan()
    {
        return view('dashboardMahasiswa.bantuan');
    }

    public function diskusi()
    {
        return view('dashboardMahasiswa.forum-diskusi');
    }

    public function magang()
    {
        return view('dashboardMahasiswa.magang-simpan');
    }
}
