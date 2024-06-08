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
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'index']);
Route::get('/register/user', [AuthController::class, 'registerUser'])->name('register.user');
Route::get('/register/user', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/register/user', [AuthController::class, 'storeUser'])->name('register.user.store');
Route::get('/register/perusahaan', [AuthController::class, 'registerPerusahaan'])->name('register.perusahaan');
Route::post('/register/perusahaan', [AuthController::class, 'storePerusahaan'])->name('register.perusahaan.store');

// beranda
Route::get('/beranda', [HomePageController::class, 'beranda'])->name('beranda');
Route::get('/logowan-kerja-dan-magang', [HomePageController::class, 'lowongan']);
Route::get('/frequently-asked-questions', [HomePageController::class, 'frequentlyAskedQuestions']);
Route::get('/artikel', [HomePageController::class, 'artikel']);
Route::get('/detail-artikel', [HomePageController::class, 'detailArtikel']);
Route::get('/webinar', [HomePageController::class, 'webinar']);
Route::get('/detail-webinar', [HomePageController::class, 'detailWebinar']);
Route::get('/detail-logowan-kerja-dan-magang', [HomePageController::class, 'detailLowongan']);
Route::get('/about', [HomePageController::class, 'about']);

// admin
Route::get('/admin', function () {
    return redirect('/admin/dashboard');
});
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

/* Pengguna Mitra Perusahaan */
Route::get('/admin/penggunaperusahaan', [PenggunaPerusahaanController::class, 'index'])->name('admin.pengguna.index');
Route::get('/admin/penggunaperusahaan/create', [PenggunaPerusahaanController::class, 'create'])->name('admin.pengguna.create');
Route::post('/admin/penggunaperusahaan/createproses', [PenggunaPerusahaanController::class, 'createproses'])->name('admin.pengguna.createproses');
Route::get('/admin/penggunaperusahaan/edit', [PenggunaPerusahaanController::class, 'edit'])->name('admin.pengguna.edit');
Route::post('/admin/penggunaperusahaan/update/{id}', [PenggunaPerusahaanController::class, 'update'])->name('admin.pengguna.update');
Route::delete('/admin/penggunaperusahaan/{id}', [PenggunaPerusahaanController::class, 'delete'])->name('admin.pengguna.delete');

/* Pengguna Mahasiswa */
Route::get('/admin/mahasiswa', [PenggunaMahasiswaController::class, 'index'])->name('admin.penggunamhs.index');
Route::get('/admin/penggunamahasiswa/create', [PenggunaMahasiswaController::class, 'create'])->name('admin.penggunamhs.create');
Route::post('/admin/penggunamahasiswa/createproses', [PenggunaMahasiswaController::class, 'createproses'])->name('admin.penggunamhs.createproses');
Route::get('/admin/penggunamahasiswa/edit', [PenggunaMahasiswaController::class, 'edit'])->name('admin.penggunamhs.edit');
Route::post('/admin/penggunamahasiswa/update/{id}', [PenggunaMahasiswaController::class, 'update'])->name('admin.penggunamhs.update');
Route::delete('/admin/penggunamahasiswa/{id}', [PenggunaMahasiswaController::class, 'delete'])->name('admin.penggunamhs.delete');

/* Webinar Apprentech */
Route::get('/admin/webinarapprentech', [WebinarApprentechController::class, 'index'])->name('admin.webinarapprentech.index');
Route::get('/admin/webinarapprentech/create', [WebinarApprentechController::class, 'create'])->name('admin.webinarapprentech.create');
Route::post('/admin/webinarapprentech/createproses', [WebinarApprentechController::class, 'createproses'])->name('admin.webinarapprentech.createproses');
Route::get('/admin/webinarapprentech/edit', [WebinarApprentechController::class, 'edit'])->name('admin.webinarapprentech.edit');
Route::post('/admin/webinarapprentech/update/{id}', [WebinarApprentechController::class, 'update'])->name('admin.webinarapprentech.update');
Route::delete('/admin/webinarapprentech/{id}', [WebinarApprentechController::class, 'delete'])->name('admin.webinarapprentech.delete');

/* Webinar Perusahaan */
Route::get('/admin/webinarperusahaan', [WebinarPerusahaanController::class, 'index'])->name('admin.webinarperusahaan.index');
Route::get('/admin/webinarperusahaan/create', [WebinarPerusahaanController::class, 'create'])->name('admin.webinarperusahaan.create');
Route::post('/admin/webinarperusahaan/createproses', [WebinarPerusahaanController::class, 'createproses'])->name('admin.webinarperusahaan.createproses');
Route::get('/admin/webinarperusahaan/edit', [WebinarPerusahaanController::class, 'edit'])->name('admin.webinarperusahaan.edit');
Route::post('/admin/webinarperusahaan/update/{id}', [WebinarPerusahaanController::class, 'update'])->name('admin.webinarperusahaan.update');
Route::delete('/admin/webinarperusahaan/{id}', [WebinarPerusahaanController::class, 'delete'])->name('admin.webinarperusahaan.delete');

// Dashboard
Route::prefix('dashboard')->group(function () {
    // Dashboard Mahasiswa
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.index');
        Route::get('/awal', [DashboardMahasiswaController::class, 'dashboardAwal']);
        Route::get('/profil', [DashboardMahasiswaController::class, 'editProfil'])->name('mahasiswa.profil');
        Route::put('/profil', [DashboardMahasiswaController::class, 'updateProfil'])->name('mahasiswa.profil.update');        
        Route::get('/bantuan', [DashboardMahasiswaController::class, 'bantuan']);
        Route::get('/diskusi', [DashboardMahasiswaController::class, 'diskusi']);
        Route::get('/magang-disimpan', [DashboardMahasiswaController::class, 'magang']);
    });
    // Dashboard Perusahaan
    Route::prefix('perusahaan')->group(function () {
        Route::get('/', [DashboardPerusahaanController::class, 'index'])->name('perusahaan.index');
        Route::get('/awal', [DashboardPerusahaanController::class, 'perusahaan']);
        Route::get('/profil', [DashboardPerusahaanController::class, 'editProfil'])->name('perusahaan.profil');
        Route::put('/profil', [DashboardPerusahaanController::class, 'updateProfil'])->name('perusahaan.profil.update');
        Route::get('/posting-lowongan', [DashboardPerusahaanController::class, 'postingLowongan']);
        Route::get('/informasi-pendaftaran', [DashboardPerusahaanController::class, 'pendaftaran']);
        Route::get('/webinar', [DashboardPerusahaanController::class, 'webinar']);
    });
});
