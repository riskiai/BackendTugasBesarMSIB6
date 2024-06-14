<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Artikel;
use App\Models\Lowongan;
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
        // mengambil 5 data lowongan terbaru untuk ditampilkan di beranda
        $lowongans = Lowongan::latest()->limit(5)->get();
        return view('pages.beranda', compact('lowongans'));
    }

    public function frequentlyAskedQuestions()
    {
        return view('pages.frequently-asked-questions');
    }

    public function artikel()
    {
        $artikels = Artikel::all();
        return view('pages.artikel', compact('artikels'));
    }

    public function detailArtikel(Artikel $artikel)
    {
        return view('pages.detail-artikel', compact('artikel'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
