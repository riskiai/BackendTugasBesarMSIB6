<?php

namespace App\Http\Controllers;

use App\Models\ApplyLowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
    public function lamaran()
    {
        // get all ApplyLowongan with lowongan_id related to logged in company
        $lamarans = ApplyLowongan::whereHas('lowongan', function ($query) {
            $query->where('company_id', auth()->guard('company')->user()->id);
        })->with('lowongan')->get();

        // get lamaran related to logged in company with type magang
        $internApplications = $lamarans->filter(function ($lamaran) {
            return $lamaran->lowongan->jenis == 'magang';
        });

        // get lamaran related to logged in company with type kerja
        $workApplications = $lamarans->filter(function ($lamaran) {
            return $lamaran->lowongan->jenis == 'kerja';
        });

        return view('dashboardPerusahaan.informasi-pendaftar', compact('internApplications', 'workApplications'));
    }

    public function detailLamaran($id)
    {
        $lamaran = ApplyLowongan::find($id);
        return view('dashboardPerusahaan.detail-lamaran', compact('lamaran'));
    }

    public function terimaLamaran($id)
    {
        DB::beginTransaction();
        try {
            $lamaran = ApplyLowongan::find($id);
            $lamaran->status = 'accepted';
            $lamaran->save();

            DB::commit();
            return redirect()->back()->with('success', 'Berhasil menerima lamaran.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal menerima lamaran.');}
    }

    public function tolakLamaran($id)
    {
        DB::beginTransaction();
        try {
            $lamaran = ApplyLowongan::find($id);
            $lamaran->status = 'rejected';
            $lamaran->save();

            DB::commit();
            return redirect()->back()->with('success', 'Berhasil menolak lamaran.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal menolak lamaran.');
        }
    }

    public function downloadCV($id)
    {
        $lamaran = ApplyLowongan::find($id);
        $path = asset('storage/cv/' . $lamaran->cv);

        return response()->file($path);
    }
}
