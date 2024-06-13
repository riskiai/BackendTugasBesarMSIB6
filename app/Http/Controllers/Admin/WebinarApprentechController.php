<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateWebinarRequest;
use App\Models\Webinar;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class WebinarApprentechController extends Controller
{
    public function index()
    {
        $webinars = Webinar::where('company_id', 1)->get();
        return view('admin.webinar.apprentech.index', compact('webinars'));
    }

    public function create()
    {
        return view('admin.webinar.apprentech.create');
    }

    public function createproses(CreateWebinarRequest $request)
    {
        // Simpan data webinar baru
        $webinar = new Webinar();
        $webinar->company_id = $request->company_id;
        $webinar->judul_webinar = $request->judul_webinar;
        $webinar->narasumber = $request->narasumber;
        $webinar->jabatan_narasumber = $request->jabatan_narasumber;
        $webinar->tagline = $request->tagline;
        $webinar->deskripsi = $request->deskripsi;
        $webinar->tanggal = $request->tanggal;
        $webinar->waktu_mulai = $request->waktu_mulai;
        $webinar->waktu_selesai = $request->waktu_selesai;
        $webinar->platform = $request->platform;
        $webinar->lokasi = $request->lokasi;
        // poster belum ada
        $webinar->save();

        return redirect()->back()->with('success', 'Webinar berhasil dibuat');
    }

    public function edit()
    {
        return view('admin.webinar.apprentech.edit');
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
