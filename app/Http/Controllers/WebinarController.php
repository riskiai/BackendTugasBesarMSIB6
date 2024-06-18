<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWebinarRequest;
use App\Models\RegisterWebinar;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WebinarController extends Controller
{
    public function webinar()
    {
        $webinars = Webinar::all();
        return view('pages.webinar', compact('webinars'));
    }

    public function detailWebinar(Webinar $webinar)
    {
        $user = auth()->user();

        if ($user) {
            $registeredWebinars = $user->registerWebinars->pluck('webinar_id')->toArray();
            return view('pages.detail-webinar', compact('webinar', 'registeredWebinars'));
        } else {
            return view('pages.detail-webinar', compact('webinar'));
        }
    }

    public function toggleRegisterWebinar(Webinar $webinar)
    {
        $registerWebinar = RegisterWebinar::where('user_id', auth()->id())
            ->where('webinar_id', $webinar->id)
            ->first();

        // periksa apakah user sudah mendaftar webinar
        if ($registerWebinar) {
            // jika sudah mendaftar, hapus data pendaftaran
            $registerWebinar->delete();
            return redirect()->back()->with('success', 'Berhasil membatalkan pendaftaran webinar');
        } else {
            // jika belum mendaftar, tambahkan data pendaftaran
            RegisterWebinar::create([
                'user_id' => auth()->id(),
                'webinar_id' => $webinar->id,
            ]);
            return redirect()->back()->with('success', 'Berhasil mendaftar webinar');
        }
    }

    public function createWebinar()
    {
        return view('dashboardPerusahaan.posting-webinar');
    }

    public function storeWebinar(CreateWebinarRequest $request)
    {
        // Simpan data webinar baru
        $webinar = new Webinar();

        // handle webinar poster
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = time() . '_' . $poster->getClientOriginalName();
            $poster->storeAs('webinar-posters', $filename, 'public');
            $webinar->poster = $filename;
        }

        $webinar->company_id = auth()->guard('company')->user()->id;
        $webinar->judul_webinar = $request->judul_webinar;
        $webinar->narasumber = $request->narasumber;
        $webinar->jabatan_narasumber = $request->jabatan_narasumber;
        $webinar->tagline = $request->tagline;
        $webinar->deskripsi = $request->deskripsi;
        $webinar->tanggal = $request->tanggal;
        $webinar->waktu_mulai = $request->waktu_mulai;
        $webinar->waktu_selesai = $request->waktu_selesai;
        $webinar->platform = $request->platform;
        // poster belum ada
        $webinar->save();

        return redirect()->back()->with('success', 'Webinar berhasil dibuat');
    }

    public function editWebinar(Webinar $webinar)
    {
        return view('dashboardPerusahaan.edit-webinar', compact('webinar'));
    }

    public function updateWebinar(CreateWebinarRequest $request, Webinar $webinar)
    {
        $webinar = Webinar::find($webinar->id);

        // handle webinar poster
        if ($request->hasFile('poster')) {

            // Hapus foto profil lama jika ada
            if ($webinar->poster) {
                Storage::disk('public')->delete('webinar-posters/' . $webinar->poster);
            }

            $poster = $request->file('poster');
            $filename = time() . '_' . $poster->getClientOriginalName();
            $poster->storeAs('webinar-posters', $filename, 'public');
            $webinar->poster = $filename;
        }

        // handle update
        $webinar->judul_webinar = $request->judul_webinar;
        $webinar->narasumber = $request->narasumber;
        $webinar->jabatan_narasumber = $request->jabatan_narasumber;
        $webinar->tagline = $request->tagline;
        $webinar->deskripsi = $request->deskripsi;
        $webinar->tanggal = $request->tanggal;
        $webinar->waktu_mulai = $request->waktu_mulai;
        $webinar->waktu_selesai = $request->waktu_selesai;
        $webinar->platform = $request->platform;
        
        $webinar->save();

        return redirect()->back()->with('success', 'Berhasil mengubah webinar');
    }

    public function deleteWebinar(Webinar $webinar)
    {
        $webinar->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus webinar');
    }
}
