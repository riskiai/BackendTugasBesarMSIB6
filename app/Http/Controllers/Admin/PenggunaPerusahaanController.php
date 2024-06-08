<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePerusahaanRequest;
use App\Http\Requests\RegisterRequest;

class PenggunaPerusahaanController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.pengguna.perusahaan.index', compact('companies'));
    }

    public function create() {
        return view('admin.pengguna.perusahaan.create');
    }

    public function createproses(CreatePerusahaanRequest $request) {
        $company = Company::create($request->validated());
        $company->assignRole('company');

        return redirect()->route('admin.pengguna.index')->with('success', 'Perusahaan berhasil ditambahkan');
    }

    public function edit() {
        return view('admin.pengguna.perusahaan.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
