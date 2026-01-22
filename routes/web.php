<?php

use App\Http\Controllers\DashaboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sekolahController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [HomeController::class, 'index']);
// Route::post('/login', [HomeController::class, 'login'])->name('login');
// Route::post('/login', [HomeController::class, 'authenticate'])->name('login.post');
// Route::get('/main', [HomeController::class, 'main'])->name('main');
// Route::get('/dashboard', [DashaboardController::class, 'index'])->name('dashboard')->middleware('auth');
// Route::get('/siswa', [sekolahController::class, 'siswa'])->name('siswa')->middleware('auth');
// Route::get('/guru', [sekolahController::class, 'guru'])->name('guru')->middleware('auth');
// Route::get('/kelas', [sekolahController::class, 'kelas'])->name('kelas')->middleware('auth');
// Route::post('/logout', [HomeController::class, 'logout'])->name('logout')->middleware('auth');

// halaman login
Route::get('/', [HomeController::class, 'login'])->name('login')->middleware('guest');

// proses login
Route::post('/login', [HomeController::class, 'authenticate'])->name('login.post');

// halaman utama
Route::get('/main', [HomeController::class, 'main'])->name('main')->middleware('auth');

// dashboard & menu
Route::get('/dashboard', [DashaboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/siswa', [sekolahController::class, 'siswa'])->name('siswa')->middleware('auth');
Route::get('/guru', [sekolahController::class, 'guru'])->name('guru')->middleware('auth');
Route::get('/kelas', [sekolahController::class, 'kelas'])->name('kelas')->middleware('auth');

// logout
Route::post('/logout', [HomeController::class, 'logout'])->name('logout')->middleware('auth');
