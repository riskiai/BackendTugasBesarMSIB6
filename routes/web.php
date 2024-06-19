<?php

use App\Http\Controllers\Admin\AdminLowonganController;
use App\Http\Controllers\Admin\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenggunaMahasiswaController;
use App\Http\Controllers\Admin\PenggunaPerusahaanController;
use App\Http\Controllers\Admin\WebinarApprentechController;
use App\Http\Controllers\Admin\WebinarPerusahaanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mahasiswa\ProfileController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardPerusahaanController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\WebinarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return redirect('/admin/dashboard');
// });



// Auth
Route::get('/', function () {
    return redirect()->route('beranda');
});
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('stayLogged');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/login/google', [AuthController::class, 'loginGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'loginGoogleCallback'])->name('login.google.callback');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('register')->middleware('stayLogged')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('register');
    Route::get('/user', [AuthController::class, 'registerUser'])->name('register.user');
    Route::post('/user/store', [AuthController::class, 'storeUser'])->name('register.user.store');
    Route::get('/perusahaan', [AuthController::class, 'registerPerusahaan'])->name('register.perusahaan');
    Route::post('/perusahaan', [AuthController::class, 'storePerusahaan'])->name('register.perusahaan.store');
});

// beranda
Route::get('/beranda', [HomePageController::class, 'beranda'])->name('beranda');
Route::get('/frequently-asked-questions', [HomePageController::class, 'frequentlyAskedQuestions'])->name('faq');
Route::get('/artikel', [HomePageController::class, 'artikel'])->name('artikel');
Route::get('/detail-artikel/{artikel}', [HomePageController::class, 'detailArtikel']);
Route::get('/pendiri-apprentech', [HomePageController::class, 'about'])->name('about');

// 
Route::prefix('lowongan')->group(function () {
    Route::get('/', [LowonganController::class, 'lowongan'])->name('lowongan');
    Route::get('/search', [LowonganController::class, 'searchLowongan'])->name('lowongan.search');
    Route::get('/{lowongan}', [LowonganController::class, 'detailLowongan'])->name('lowongan.detail');
    Route::post('/{lowongan}/bookmark', [LowonganController::class, 'toggleSimpanLowongan'])->name('lowongan.bookmark');
    Route::post('/{lowongan}/apply', [LowonganController::class, 'applyLowongan'])->name('lowongan.apply');
});

// webinar
Route::prefix('webinar')->group(function () {
    Route::get('/', [WebinarController::class, 'webinar'])->name('webinar');
    Route::get('/{webinar}', [WebinarController::class, 'detailWebinar']);
    Route::post('/{webinar}/register', [WebinarController::class, 'toggleRegisterWebinar'])->name('webinar.register');
});

// admin
Route::prefix('admin')->middleware(['authenticate', 'role:admin'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('artikel')->group(function () {
        Route::get('/', [ArtikelController::class, 'index'])->name('admin.artikel.index');
        Route::get('/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
        Route::post('/store', [ArtikelController::class, 'store'])->name('admin.artikel.store');
        Route::get('/{artikel}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::put('/{artikel}/update', [ArtikelController::class, 'update'])->name('admin.artikel.update');
        Route::delete('/{artikel}', [ArtikelController::class, 'delete'])->name('admin.artikel.delete');
    });

    Route::prefix('lowongan')->group(function() {
        Route::get('/', [AdminLowonganController::class, 'index'])->name('admin.lowongan.index');
        Route::get('/create', [AdminLowonganController::class, 'create'])->name('admin.lowongan.create');
        Route::post('/store', [AdminLowonganController::class, 'store'])->name('admin.lowongan.store');
        Route::get('/{lowongan}/edit', [AdminLowonganController::class, 'edit'])->name('admin.lowongan.edit');
        Route::put('/{lowongan}/update', [AdminLowonganController::class, 'update'])->name('admin.lowongan.update');
        Route::delete('/{lowongan}', [AdminLowonganController::class, 'delete'])->name('admin.lowongan.delete');
    });

    Route::prefix('pengguna')->group(function () {
        /* Pengguna Mitra Perusahaan */
        Route::prefix('perusahaan')->group(function () {
            Route::get('/', [PenggunaPerusahaanController::class, 'index'])->name('admin.pengguna.index');
            Route::get('/create', [PenggunaPerusahaanController::class, 'create'])->name('admin.pengguna.create');
            Route::post('/createproses', [PenggunaPerusahaanController::class, 'createproses'])->name('admin.pengguna.createproses');
            Route::get('/edit', [PenggunaPerusahaanController::class, 'edit'])->name('admin.pengguna.edit');
            Route::post('/update/{id}', [PenggunaPerusahaanController::class, 'update'])->name('admin.pengguna.update');
            Route::delete('/{id}', [PenggunaPerusahaanController::class, 'delete'])->name('admin.pengguna.delete');
        });
        /* Pengguna Mahasiswa */
        Route::prefix('mahasiswa')->group(function () {
            Route::get('/', [PenggunaMahasiswaController::class, 'index'])->name('admin.penggunamhs.index');
            Route::get('/create', [PenggunaMahasiswaController::class, 'create'])->name('admin.penggunamhs.create');
            Route::post('/createproses', [PenggunaMahasiswaController::class, 'createproses'])->name('admin.penggunamhs.createproses');
            Route::get('/edit', [PenggunaMahasiswaController::class, 'edit'])->name('admin.penggunamhs.edit');
            Route::post('/update/{id}', [PenggunaMahasiswaController::class, 'update'])->name('admin.penggunamhs.update');
            Route::delete('/{id}', [PenggunaMahasiswaController::class, 'delete'])->name('admin.penggunamhs.delete');
        });
    });

    Route::prefix('webinar')->group(function () {
        /* Webinar Apprentech */
        Route::prefix('apprentech')->group(function () {
            Route::get('/', [WebinarApprentechController::class, 'index'])->name('admin.webinarapprentech.index');
            Route::get('/create', [WebinarApprentechController::class, 'create'])->name('admin.webinarapprentech.create');
            Route::post('/createproses', [WebinarApprentechController::class, 'createproses'])->name('admin.webinarapprentech.createproses');
            Route::get('/edit', [WebinarApprentechController::class, 'edit'])->name('admin.webinarapprentech.edit');
            Route::post('/update/{id}', [WebinarApprentechController::class, 'update'])->name('admin.webinarapprentech.update');
            Route::delete('/{id}', [WebinarApprentechController::class, 'delete'])->name('admin.webinarapprentech.delete');
        });
        /* Webinar Perusahaan */
        Route::prefix('perusahaan')->group(function () {
            Route::get('/', [WebinarPerusahaanController::class, 'index'])->name('admin.webinarperusahaan.index');
            Route::get('/create', [WebinarPerusahaanController::class, 'create'])->name('admin.webinarperusahaan.create');
            Route::post('/createproses', [WebinarPerusahaanController::class, 'createproses'])->name('admin.webinarperusahaan.createproses');
            Route::get('/edit', [WebinarPerusahaanController::class, 'edit'])->name('admin.webinarperusahaan.edit');
            Route::post('/update/{id}', [WebinarPerusahaanController::class, 'update'])->name('admin.webinarperusahaan.update');
            Route::delete('/{id}', [WebinarPerusahaanController::class, 'delete'])->name('admin.webinarperusahaan.delete');
        });
    });
});

// Dashboard
Route::prefix('dashboard')->group(function () {
    // Dashboard Mahasiswa
    Route::prefix('mahasiswa')->middleware(['authenticate', 'role:user|admin'])->group(function () {
        Route::get('/', [DashboardMahasiswaController::class, 'dashboardAwal'])->name('mahasiswa.index');
        Route::get('/profil/edit', [DashboardMahasiswaController::class, 'editProfil'])->name('mahasiswa.profil');
        Route::put('/profil/update', [DashboardMahasiswaController::class, 'updateProfil'])->name('mahasiswa.profil.update');
        Route::get('/bantuan', [DashboardMahasiswaController::class, 'bantuan'])->name('bantuan');
        Route::get('/diskusi', [DashboardMahasiswaController::class, 'diskusi']);
        Route::get('/lowongan-disimpan', [DashboardMahasiswaController::class, 'lowonganDisimpan'])->name('mahasiswa.lowongan-disimpan');
    });

    // Dashboard Perusahaan
    Route::prefix('perusahaan')->middleware(['authenticate'])->group(function () {
        Route::get('/', [DashboardPerusahaanController::class, 'index'])->name('perusahaan.index');
        Route::get('/awal', [DashboardPerusahaanController::class, 'perusahaan']);
        Route::get('/profil/edit', [DashboardPerusahaanController::class, 'editProfil'])->name('perusahaan.profil');
        Route::put('/profil/update', [DashboardPerusahaanController::class, 'updateProfil'])->name('perusahaan.profil.update');
        Route::get('/posting-lowongan', [DashboardPerusahaanController::class, 'postingLowongan'])->name('perusahaan.lowongan.posting');
        Route::prefix('lowongan')->group(function () {
            // Route::get('/pendaftar', [DashboardPerusahaanController::class, 'lamaran'])->name('perusahaan.lamaran');
            Route::prefix('magang')->group(function () {
                Route::get('/', [DashboardPerusahaanController::class, 'lowonganMagang'])->name('perusahaan.magang');
                Route::get('/create', [DashboardPerusahaanController::class, 'createLowonganMagang'])->name('perusahaan.magang.create');
                Route::post('/store', [LowonganController::class, 'storeMagang'])->name('perusahaan.magang.store');
                Route::get('/{lowongan}/edit', [LowonganController::class, 'editMagang'])->name('perusahaan.magang.edit');
                Route::put('/{lowongan}/update', [LowonganController::class, 'updateMagang'])->name('perusahaan.magang.update');
                Route::post('/{lowongan}/delete', [LowonganController::class, 'deleteMagang'])->name('perusahaan.magang.delete');
            });
            Route::prefix('kerja')->group(function () {
                Route::get('/', [DashboardPerusahaanController::class, 'lowonganKerja'])->name('perusahaan.kerja');
                Route::get('/create', [DashboardPerusahaanController::class, 'createLowonganKerja'])->name('perusahaan.kerja.create');
                Route::post('/store', [LowonganController::class, 'storeKerja'])->name('perusahaan.kerja.store');
                Route::get('/{lowongan}/edit', [LowonganController::class, 'editKerja'])->name('perusahaan.kerja.edit');
                Route::put('/{lowongan}/update', [LowonganController::class, 'updateKerja'])->name('perusahaan.kerja.update');
                Route::post('/{lowongan}/delete', [LowonganController::class, 'deleteKerja'])->name('perusahaan.kerja.delete');
            });
        });
        Route::prefix('webinar')->group(function () {
            Route::get('/', [DashboardPerusahaanController::class, 'webinar'])->name('perusahaan.webinar');
            Route::get('/create', [WebinarController::class, 'createWebinar'])->name('perusahaan.webinar.create');
            Route::post('/store', [WebinarController::class, 'storeWebinar'])->name('perusahaan.webinar.store');
            Route::get('/{webinar}/edit', [WebinarController::class, 'editWebinar'])->name('perusahaan.webinar.edit');
            Route::put('/{webinar}/update', [WebinarController::class, 'updateWebinar'])->name('perusahaan.webinar.update');
            Route::post('/{webinar}/delete', [WebinarController::class, 'deleteWebinar'])->name('perusahaan.webinar.delete');
        });
        Route::prefix('lamaran')->group(function () {
            Route::get('/', [LamaranController::class, 'lamaran'])->name('perusahaan.lamaran');
            Route::get('/{id}', [LamaranController::class, 'detailLamaran'])->name('perusahaan.lamaran.detail');
            Route::post('/{id}/terima', [LamaranController::class, 'terimaLamaran'])->name('perusahaan.lamaran.terima');
            Route::post('/{id}/tolak', [LamaranController::class, 'tolakLamaran'])->name('perusahaan.lamaran.tolak');
            Route::get('/{id}/cv/download', [LamaranController::class, 'downloadCV'])->name('perusahaan.lamaran.cv.download');
        });
    });
});
