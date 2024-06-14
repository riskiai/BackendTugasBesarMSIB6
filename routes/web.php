<?php

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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('register')->group(function () {
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
Route::get('/about', [HomePageController::class, 'about'])->name('about');

// lowongan
Route::get('/lowongan-kerja-dan-magang', [LowonganController::class, 'lowongan'])->name('lowongan');
Route::get('/lowongan/{lowongan}', [LowonganController::class, 'detailLowongan'])->name('lowongan.detail');
Route::post('/lowongan/{lowongan}/bookmark', [LowonganController::class, 'toggleSimpanLowongan'])->name('lowongan.bookmark');
Route::post('/lowongan/{lowongan}/apply', [LowonganController::class, 'applyLowongan'])->name('lowongan.apply');

// webinar
Route::get('/webinar', [WebinarController::class, 'webinar'])->name('webinar');
Route::get('/webinar/{webinar}', [WebinarController::class, 'detailWebinar']);
Route::post('/webinar/{webinar}/register', [WebinarController::class, 'toggleRegisterWebinar'])->name('webinar.register')->middleware('authenticate');


// admin
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

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
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/', [DashboardMahasiswaController::class, 'dashboardAwal'])->name('mahasiswa.index');
        Route::get('/profil', [DashboardMahasiswaController::class, 'editProfil'])->name('mahasiswa.profil');
        Route::put('/profil', [DashboardMahasiswaController::class, 'updateProfil'])->name('mahasiswa.profil.update');
        Route::get('/bantuan', [DashboardMahasiswaController::class, 'bantuan']);
        Route::get('/diskusi', [DashboardMahasiswaController::class, 'diskusi']);
        Route::get('/lowongan-disimpan', [DashboardMahasiswaController::class, 'lowonganDisimpan']);
    });
    // Dashboard Perusahaan
    Route::prefix('perusahaan')->group(function () {
        Route::get('/', [DashboardPerusahaanController::class, 'index'])->name('perusahaan.index');
        Route::get('/awal', [DashboardPerusahaanController::class, 'perusahaan']);
        Route::get('/profil', [DashboardPerusahaanController::class, 'editProfil'])->name('perusahaan.profil');
        Route::put('/profil', [DashboardPerusahaanController::class, 'updateProfil'])->name('perusahaan.profil.update');
        Route::get('/posting-lowongan', [DashboardPerusahaanController::class, 'postingLowongan']);
        Route::post('lowongan/magang/store', [DashboardPerusahaanController::class, 'storeMagang'])->name('perusahaan.magang.store');
        Route::post('lowongan/kerja/store', [DashboardPerusahaanController::class, 'storeKerja'])->name('perusahaan.kerja.store');
        Route::get('/informasi-pendaftaran', [DashboardPerusahaanController::class, 'pendaftaran']);
        Route::get('/webinar/create', [DashboardPerusahaanController::class, 'createWebinar'])->name('perusahaan.webinar.create');
        Route::post('/webinar/store', [DashboardPerusahaanController::class, 'storeWebinar'])->name('perusahaan.webinar.store');
    });
});
