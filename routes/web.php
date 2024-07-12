<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RombonganBelajarController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dosen', [AdminController::class, 'index']);

    Route::get('/dosen', function () {
        return view('dosen'); // go to dosen.blade.php
    });
    Route::get('/dosen/show', [DosenController::class, 'show'])->name('dosen.show'); // display
    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create'); // add
    Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
    Route::get('/dosen/{nidn}/edit', [DosenController::class, 'edit'])->name('dosen.edit'); // edit
    Route::delete('/dosen/{nidn}', [DosenController::class, 'destroy'])->name('dosen.destroy'); // delete
    Route::get('/dosen/{nidn}', [DosenController::class, 'view'])->name('dosen.view'); // view

    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create'); // add
    Route::get('/mahasiswa/show', [MahasiswaController::class, 'show'])->name('mahasiswa.show'); // display
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit'); // edit
    Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy'); // delete
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'view'])->name('mahasiswa.view'); // view

    Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create'); // add
    Route::get('/prodi/show', [ProdiController::class, 'show'])->name('prodi.show'); // display
    Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');
    Route::get('/prodi/{id}/edit', [ProdiController::class, 'edit'])->name('prodi.edit'); // edit
    Route::delete('/prodi/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy'); // delete
    Route::get('/prodi/{id}', [ProdiController::class, 'view'])->name('prodi.view'); // view

    Route::get('/rombel/show', [RombonganBelajarController::class, 'show'])->name('rombel.show'); // display
    Route::get('/rombel/create', [RombonganBelajarController::class, 'create'])->name('rombel.create'); // add
    Route::post('/rombel/store', [RombonganBelajarController::class, 'store'])->name('rombel.store');
    Route::get('/rombel/{id}/edit', [RombonganBelajarController::class, 'edit'])->name('rombel.edit'); // edit
    Route::delete('/rombel/{id}', [RombonganBelajarController::class, 'destroy'])->name('rombel.destroy'); // delete
    Route::get('/rombel/{id}', [RombonganBelajarController::class, 'view'])->name('rombel.view'); // view

});

Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024"; // directly print
});

Route::get('/profil', function () {
    return view('profil'); // go to profil.blade.php
});

require __DIR__ . '/auth.php';
