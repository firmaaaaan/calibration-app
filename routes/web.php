<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalibrasiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
});

// Dashboard hanya untuk user yang sudah login & verifikasi
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Profile user (hanya untuk user login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// CRUD Kalibrasi
Route::get('/kalibrasi', [KalibrasiController::class, 'index'])->name('kalibrasi.index'); // daftar permohonan
Route::get('/kalibrasi/create', [KalibrasiController::class, 'create'])->name('kalibrasi.create'); // form create
Route::post('/kalibrasi', [KalibrasiController::class, 'store'])->name('kalibrasi.store'); // simpan data
Route::get('/kalibrasi/{kalibrasi}', [KalibrasiController::class, 'show'])->name('kalibrasi.show'); // detail
Route::get('/kalibrasi/{kalibrasi}/edit', [KalibrasiController::class, 'edit'])->name('kalibrasi.edit'); // form edit
Route::put('/kalibrasi/{kalibrasi}', [KalibrasiController::class, 'update'])->name('kalibrasi.update'); // update data
Route::delete('/kalibrasi/{kalibrasi}', [KalibrasiController::class, 'destroy'])->name('kalibrasi.destroy'); // hapus data

require __DIR__.'/auth.php';
