<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarApprentechController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.webinar.apprentech.index');

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
