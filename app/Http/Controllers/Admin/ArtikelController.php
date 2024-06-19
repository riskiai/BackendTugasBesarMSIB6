<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\User;
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

    public function edit($id)
    {
        return view('admin.artikel.edit');
    }
}
