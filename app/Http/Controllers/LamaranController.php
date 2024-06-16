<?php

namespace App\Http\Controllers;

use App\Models\ApplyLowongan;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    public function lamaran()
    {
        // get lamaran related to logged in company with eager loading to lowongan
        $lamarans = ApplyLowongan::whereHas('lowongan', function ($query) {
            $query->where('company_id', auth()->guard('company')->user()->id);
        })->with('lowongan')->get();

        // get lamaran related to logged in company with type magang
        $internApplications = $lamarans->filter(function ($lamaran) {
            return $lamaran->lowongan->type == 'magang';
        });

        // get lamaran related to logged in company with type kerja
        $workApplications = $lamarans->filter(function ($lamaran) {
            return $lamaran->lowongan->type == 'kerja';
        });
        
        return view('lamaran.index', compact('internApplications', 'workApplications'));
    }

    public function detailLamaran($id)
    {
        $lamaran = ApplyLowongan::find($id);
        return view('lamaran.detail', compact('lamaran'));
    }

    public function terimaLamaran($id)
    {
        $lamaran = ApplyLowongan::find($id);
        $lamaran->status = 'accepted';
        $lamaran->save();

        return redirect()->back()->with('success', 'Berhasil menerima lamaran.');
    }

    public function tolakLamaran($id)
    {
        $lamaran = ApplyLowongan::find($id);
        $lamaran->status = 'rejected';
        $lamaran->save();

        return redirect()->back()->with('success', 'Berhasil menolak lamaran.');
    }
}
