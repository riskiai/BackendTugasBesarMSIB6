<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarPerusahaanController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.webinar.perusahaan.index');

    }

    public function create() {
        return view('admin.webinar.perusahaan.create');
    }

    public function createproses() {
        
    }

    public function edit() {
        return view('admin.webinar.perusahaan.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
