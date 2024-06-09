<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarPerusahaanController extends Controller
{
    public function index()
    {
        // Semua webinar yang bukan dari perusahaan Apprentech
        $webinars = Webinar::where('company_id', '!=', 1)->get();
        return view('admin.webinar.perusahaan.index', compact('webinars'));
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
