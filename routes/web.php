<?php

use App\Models\HomeController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [BeritaController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [BeritaController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [BeritaController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/berita', [IndexController::class, 'berita'])->name('berita');
    Route::delete('/postingan/{id}', [BeritaController::class, 'destroy'])->name('postingan.destroy');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/visimisi', [IndexController::class, 'visimisi'])->name('visimisi');
Route::get('/sejarahdesa', [IndexController::class, 'sejarahdesa'])->name('sejarahdesa');
Route::get('/pemerintahdesa', [IndexController::class, 'pemerintahdesa'])->name('pemerintahdesa');
Route::get('/bpd', [IndexController::class, 'bpd'])->name('bpd');
Route::get('/lpmd', [IndexController::class, 'lpmd'])->name('lpmd');
Route::get('/karangtaruna', [IndexController::class, 'karangtaruna'])->name('karangtaruna');
Route::get('/rtrw', [IndexController::class, 'rtrw'])->name('rtrw');
// Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
Route::get('/add', [BeritaController::class, 'add'])->name('add');
Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
Route::get('/detail/{id}', [BeritaController::class, 'detail'])->name('detail');
Route::post('/update/{id}', [BeritaController::class, 'update'])->name('update');
Route::post('/tambah', [BeritaController::class, 'tambah'])->name('tambah');

require __DIR__.'/auth.php';
