<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class HomePageController extends Controller
{
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
        $webinars = Webinar::all();
        return view('pages.webinar', compact('webinars'));
    }

    public function detailWebinar(Webinar $webinar)
    {
        return view('pages.detail-webinar', compact('webinar'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
