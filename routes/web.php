<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Mahasiswa\ProfileController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardPerusahaaController;

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
Route::get('/', [HomePageController::class, 'index']);
Route::get('/login', [HomePageController::class, 'login'])->name('login');
Route::post('/login', [HomePageController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [HomePageController::class, 'register']);
Route::post('/register', [HomePageController::class, 'store'])->name('register.store');
Route::get('/login-perusahaan', [HomePageController::class, 'authPerusahaan']);

// admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

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

// Dashboard Mahasiswa
Route::get('dashboard-mahasisswa', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('dashboard-mahasisswa-awal', [DashboardMahasiswaController::class, 'dashboardAwal']);
Route::get('dashboard-mahasisswa-profil', [DashboardMahasiswaController::class, 'editProfil']);
Route::get('dashboard-mahasisswa-bantuan', [DashboardMahasiswaController::class, 'bantuan']);
Route::get('dashboard-mahasisswa-diskusi', [DashboardMahasiswaController::class, 'diskusi']);
Route::get('dashboard-mahasisswa-magang-disimpan', [DashboardMahasiswaController::class, 'magang']);

// Dashboard Perusahaan
Route::get('dashboard-perusahaan', [DashboardPerusahaaController::class, 'index']);
Route::get('dashboard-perusahaan-awal', [DashboardPerusahaaController::class, 'perusahaan']);
Route::get('dashboard-perusahaan-profil', [DashboardPerusahaaController::class, 'editProfil']);
Route::get('dashboard-perusahaan-posting-lowongan', [DashboardPerusahaaController::class, 'postingLowongan']);
Route::get('dashboard-perusahaan-informasi-pendaftaran', [DashboardPerusahaaController::class, 'pendaftaran']);
Route::get('dashboard-perusahaan-webinar', [DashboardPerusahaaController::class, 'webinar']);
