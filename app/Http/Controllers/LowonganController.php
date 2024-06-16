<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyLowonganRequest;
use App\Http\Requests\CreateKerjaRequest;
use App\Http\Requests\CreateMagangRequest;
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

    public function applyLowongan(ApplyLowonganRequest $request, Lowongan $lowongan)
    {
        // kalau ada file cv
        if ($request->hasFile('cv')) {
            // simpan file cv
            $cv = $request->file('cv');
            $cvFileName = time() . '_' . $cv->getClientOriginalName();
            $cv->storeAs('cv', $cvFileName, 'public');
        } else {
            $cvFileName = null;
        }

        // Simpan data lamaran
        ApplyLowongan::create([
            'user_id' => auth()->id(),
            'lowongan_id' => $lowongan->id,
            'pertanyaan1' => $request->pertanyaan1,
            'pertanyaan2' => $request->pertanyaan2,
            'pertanyaan3' => $request->pertanyaan3,
            'cv' => $cvFileName,
        ]);
        
        return redirect()->back()->with('success', 'Berhasil melamar lowongan');
    }

    public function storeMagang(CreateMagangRequest $request)
    {
        // Simpan data lowongan
        Lowongan::create([
            'company_id' => auth()->guard('company')->user()->id,
            'judul' => $request->judul,
            'jenis' => 'magang',
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'kualifikasi' => $request->kualifikasi,
            'deadline' => $request->deadline,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ]);

        return redirect()->route('perusahaan.magang')->with('success', 'Berhasil membuat lowongan magang');
    }

    public function storekerja(CreateKerjaRequest $request)
    {
        // Simpan data lowongan
        Lowongan::create([
            'company_id' => auth()->guard('company')->user()->id,
            'judul' => $request->judul,
            'jenis' => 'kerja',
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'kualifikasi' => $request->kualifikasi,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('perusahaan.kerja')->with('success', 'Berhasil membuat lowongan magang');
    }
}
