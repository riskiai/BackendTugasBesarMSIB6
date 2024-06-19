<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArtikelRequest;
use App\Models\Artikel;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        $users = User::role('user')->get();
        return view('admin.artikel.index', compact('users', 'artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(CreateArtikelRequest $request)
    {
        $artikel = new Artikel();

        // handle apabila ada image yang diupload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('artikel-images', $filename, 'public');
            $artikel->image = $filename;
        }

        $artikel->judul = request('judul');
        $artikel->konten = request('konten');
        $artikel->save();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.artikel.edit');
    }
}
