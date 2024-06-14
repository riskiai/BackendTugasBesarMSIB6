<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfilMahasiswaRequest;
use App\Models\Lowongan;
use App\Models\RegisterWebinar;
use App\Models\SimpanLowongan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        // logged user
        $user = auth()->user();
        return view('dashboardMahasiswa.index', compact('user'));
    }

    public function dashboardAwal()
    {
        $savedLowongans = SimpanLowongan::with('lowongan')->where('user_id', auth()->id())->get();
        $registeredWebinars = RegisterWebinar::with('webinar')->where('user_id', auth()->id())->get();
        return view('dashboardMahasiswa.dashboard-awal', compact('savedLowongans', 'registeredWebinars'));
    }

    public function editProfil()
    {
        $user = auth()->user();
        return view('dashboardMahasiswa.edit-profil', compact('user'));
    }

    public function updateProfil(UpdateProfilMahasiswaRequest $request)
    {
        $user = User::find(auth()->user()->id);

        // Perbarui informasi mahasiswa
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->instagram = $request->instagram;
        $user->facebook = $request->facebook;

        // Simpan perubahan
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbaharui');
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
