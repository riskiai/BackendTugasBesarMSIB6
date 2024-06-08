<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMahasiswaRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaMahasiswaController extends Controller
{
    public function index()
    {
        $users = User::role('user')->get();
        return view('admin.pengguna.mahasiswa.index', compact('users'));
    }

    public function create() {
        return view('admin.pengguna.mahasiswa.create');
    }

    public function createproses(CreateMahasiswaRequest $request) {
        $user = User::create($request->validated());
        $user->assignRole('user');

        return redirect()->route('admin.penggunamhs.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function edit() {
        return view('admin.pengguna.mahasiswa.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
