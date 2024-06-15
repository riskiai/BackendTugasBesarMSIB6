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
        
        return view('lamaran.index', compact('lamarans'));
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
