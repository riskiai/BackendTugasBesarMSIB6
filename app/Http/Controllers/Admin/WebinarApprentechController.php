<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarApprentechController extends Controller
{
    public function index()
    {
        $webinars = Webinar::where('company_id', 1)->get();
        return view('admin.webinar.apprentech.index', compact('webinars'));
    }

    public function create() {
        return view('admin.webinar.apprentech.create');
    }

    public function createproses() {
        
    }

    public function edit() {
        return view('admin.webinar.apprentech.edit');
    }

    public function update() {

    }

    public function delete() {

    }
}
