<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplyLowongan;
use App\Models\Company;
use App\Models\Lowongan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $allUser = User::get();
        $mahasiswa = [];
        foreach ($allUser as $user) {
            if ($user->roles[0]->name == 'user') {
                $mahasiswa[] = $user;
            }
        }
        $mahasiswaCount = collect($mahasiswa)->count();

        $perusahaanCount = Company::get()->count();

        $lowonganCount = Lowongan::get()->count();

        $successApplyCount = ApplyLowongan::where('status', 'accepted')->get()->count();
        return view('admin.dashboard', compact('mahasiswaCount', 'perusahaanCount', 'lowonganCount', 'successApplyCount'));
    }

    public function getall() {
        
    }
}
