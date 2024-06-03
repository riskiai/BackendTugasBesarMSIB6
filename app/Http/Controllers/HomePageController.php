<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('auth.tampilan-register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function authPerusahaan()
    {
        return view('auth.auth-perusahaan');
    }


    // bagian beranda
    public function beranda()
    {
        return view('pages.beranda');
    }

    public function lowongan()
    {
        return view('pages.lowongan');
    }
    public function detailLowongan()
    {
        return view('pages.detail-lowongan');
    }

    public function frequentlyAskedQuestions()
    {
        return view('pages.frequently-asked-questions');
    }

    public function artikel()
    {
        return view('pages.artikel');
    }

    public function detailArtikel()
    {
        return view('pages.detail-artikel');
    }

    public function webinar()
    {
        return view('pages.webinar');
    }

    public function detailWebinar()
    {
        return view('pages.detail-wabinar');
    }

    public function about()
    {
        return view('pages.about');
    }
}
