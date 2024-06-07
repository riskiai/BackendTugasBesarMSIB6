<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaMahasiswaController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.pengguna.mahasiswa.index');

    }

    public function create() {
        return view('admin.pengguna.mahasiswa.create');
    }

    public function createproses() {
        
    }

    public function edit() {
        return view('admin.pengguna.mahasiswa.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
