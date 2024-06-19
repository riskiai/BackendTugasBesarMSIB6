<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyLowonganRequest;
use App\Http\Requests\CreateKerjaRequest;
use App\Http\Requests\CreateMagangRequest;
use App\Models\ApplyLowongan;
use App\Models\Lowongan;
use App\Models\SimpanLowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LowonganController extends Controller
{
    public function lowongan()
    {
        $lowongans = Lowongan::with('company')->latest()->paginate(6);
        return view('pages.lowongan', compact('lowongans'));
    }

    public function searchLowongan()
    {
        $searchText = $_GET['query'];
        $lowongans = Lowongan::with('company')->where('judul', 'LIKE', '%' . $searchText . '%')
            ->orWhere('deskripsi', 'LIKE', '%' . $searchText . '%')
            ->orWhere('lokasi', 'LIKE', '%' . $searchText . '%')
            ->latest()
            ->paginate(6);

        return view('pages.lowongan-search', compact('lowongans'));
    }

    public function detailLowongan(Lowongan $lowongan)
    {
        $user = auth()->user();

        if ($user) {
            $lowonganTersimpan = $user->simpanLowongans->pluck('lowongan_id')->toArray();
            $appliedLowongan = $user->applyLowongans->pluck('lowongan_id')->toArray();
            return view('pages.detail-lowongan', compact('lowongan', 'lowonganTersimpan', 'appliedLowongan'));
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
        DB::beginTransaction();
        try {
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

            DB::commit();
            return redirect()->back()->with('success', 'Berhasil melamar lowongan');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal melamar lowongan');
        }
    }

    public function storeMagang(CreateMagangRequest $request)
    {
        DB::beginTransaction();
        try {
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

            DB::commit();
            return redirect()->route('perusahaan.magang')->with('success', 'Berhasil membuat lowongan magang');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal membuat lowongan magang');}
    }

    public function editMagang(Lowongan $lowongan)
    {
        return view('dashboardPerusahaan.edit-lowongan-magang', compact('lowongan'));
    }

    public function updateMagang(CreateMagangRequest $request, Lowongan $lowongan)
    {
        DB::beginTransaction();
        try {
            $lowongan->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tipe' => $request->tipe,
                'lokasi' => $request->lokasi,
                'gaji' => $request->gaji,
                'kualifikasi' => $request->kualifikasi,
                'deadline' => $request->deadline,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);

            DB::commit();
            return redirect()->route('perusahaan.magang')->with('success', 'Berhasil mengubah lowongan magang');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal mengubah lowongan magang');
        }
    }

    public function deleteMagang(Lowongan $lowongan)
    {
        $lowongan->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus lowongan');
    }

    public function storekerja(CreateKerjaRequest $request)
    {
        DB::beginTransaction();
        try {
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

            DB::commit();
            return redirect()->route('perusahaan.kerja')->with('success', 'Berhasil membuat lowongan magang');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal membuat lowongan kerja');}
    }

    public function editKerja(Lowongan $lowongan)
    {
        return view('dashboardPerusahaan.edit-lowongan-kerja', compact('lowongan'));
    }

    public function updateKerja(CreateKerjaRequest $request, Lowongan $lowongan)
    {
        DB::beginTransaction();
        try {
            $lowongan->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tipe' => $request->tipe,
                'lokasi' => $request->lokasi,
                'gaji' => $request->gaji,
                'kualifikasi' => $request->kualifikasi,
                'deadline' => $request->deadline,
            ]);

            DB::commit();
            return redirect()->route('perusahaan.kerja')->with('success', 'Berhasil mengubah lowongan kerja');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::debug($e);
            abort(400, 'Gagal mengubah lowongan kerja');
        }
    }

    public function deleteKerja(Lowongan $lowongan)
    {
        $lowongan->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus lowongan');
    }
}
