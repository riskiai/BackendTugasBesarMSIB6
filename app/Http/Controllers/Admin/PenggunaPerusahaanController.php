<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function createproses() {

    }

    public function edit() {
        return view('admin.pengguna.perusahaan.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
