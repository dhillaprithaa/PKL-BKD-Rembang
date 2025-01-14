<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\MasyarakatPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

##admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/pengaduan-masyarakat/admin', [DashboardAdminController::class, 'pengaduanMasyarakat'])->name('pengaduanMasyarakat.admin');
    Route::get('/survey-kepuasan/admin', [DashboardAdminController::class, 'surveyKepuasan'])->name('surveyKepuasan.admin');
});
##endAdmin


// Route::middleware('guest')->group(function () {
Route::get('/dashboard/masyarakat', [MasyarakatPageController::class, 'dashboard'])->name('dashboard');
Route::get('/statistik', [MasyarakatPageController::class, 'statistik'])->name('statistik');
Route::get('/pengaduan', [MasyarakatPageController::class, 'pengaduan'])->name('pengaduan');
Route::get('/pengaduan/riwayat', [MasyarakatPageController::class, 'riwayatPengaduan'])->name('riwayatPengaduan');
Route::get('/survey/form', [MasyarakatPageController::class, 'surveyForm'])->name('surveyForm');
Route::get('/survey/hasil', [MasyarakatPageController::class, 'surveyHasil'])->name('surveyHasil');
// });


require __DIR__ . '/auth.php';
