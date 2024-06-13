<?php

namespace App\Http\Controllers;

use App\Models\RegisterWebinar;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebinarController extends Controller
{
    public function webinar()
    {
        $webinars = Webinar::all();
        return view('pages.webinar', compact('webinars'));
    }

    public function detailWebinar(Webinar $webinar)
    {
        $user = auth()->user();

        if ($user) {
            $registeredWebinars = $user->registerWebinars->pluck('webinar_id')->toArray();
            return view('pages.detail-webinar', compact('webinar', 'registeredWebinars'));
        } else {
            return view('pages.detail-webinar', compact('webinar'));
        }
    }

    public function toggleRegisterWebinar(Webinar $webinar)
    {
        $registerWebinar = RegisterWebinar::where('user_id', auth()->id())
            ->where('webinar_id', $webinar->id)
            ->first();

        // periksa apakah user sudah mendaftar webinar
        if ($registerWebinar) {
            // jika sudah mendaftar, hapus data pendaftaran
            $registerWebinar->delete();
            return redirect()->back()->with('success', 'Berhasil membatalkan pendaftaran webinar');
        } else {
            // jika belum mendaftar, tambahkan data pendaftaran
            RegisterWebinar::create([
                'user_id' => auth()->id(),
                'webinar_id' => $webinar->id,
            ]);
            return redirect()->back()->with('success', 'Berhasil mendaftar webinar');
        }
    }
}
