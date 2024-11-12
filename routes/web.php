<?php

use App\Models\HomeController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
    Route::delete('/postingan/{id}', [IndexController::class, 'destroy'])->name('postingan.destroy');
});

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
Route::get('/add', [IndexController::class, 'add'])->name('add');
Route::post('/tambah', [IndexController::class, 'tambah'])->name('tambah');

require __DIR__.'/auth.php';
