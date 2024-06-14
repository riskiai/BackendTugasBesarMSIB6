<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyLowonganRequest;
use App\Models\ApplyLowongan;
use App\Models\Lowongan;
use App\Models\SimpanLowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function lowongan()
    {
        $lowongans = Lowongan::all();
        return view('pages.lowongan', compact('lowongans'));
    }

    public function detailLowongan(Lowongan $lowongan)
    {
        $user = auth()->user();

        if ($user) {
            $lowonganTersimpan = $user->simpanLowongans->pluck('lowongan_id')->toArray();
            return view('pages.detail-lowongan', compact('lowongan', 'lowonganTersimpan'));
        } else {
            return view('pages.detail-lowongan', compact('lowongan'));
        }
    }

    public function toggleSimpanLowongan(Lowongan $lowongan)
    {
        $simpanLowongan = SimpanLowongan::where('user_id', auth()->id())
            ->where('lowongan_id', $lowongan->id)
            ->first();

        // periksa apakah user sudah menyimpan lowongan
        if ($simpanLowongan) {
            // jika sudah menyimpan, hapus data penyimpanan
            $simpanLowongan->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus lowongan dari penyimpanan');
        } else {
            // jika belum menyimpan, tambahkan data penyimpanan
            SimpanLowongan::create([
                'user_id' => auth()->id(),
                'lowongan_id' => $lowongan->id,
            ]);
            return redirect()->back()->with('success', 'Berhasil menyimpan lowongan');
        }
    }

    public function applyLowongan(ApplyLowonganRequest $request)
    {
        dd($request->all());
        $application = $request->validated();
        
        return redirect()->back()->with('success', 'Berhasil melamar lowongan');
    }
}
