<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class AdminLowonganController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('admin.lowongan.index', compact('lowongans'));
    }

    public function create()
    {
        return view('admin.lowongan.create');
    }

    public function edit($id)
    {
        return view('admin.lowongan.edit');
    }
}
