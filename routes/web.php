<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;    
use Illuminate\Support\Facades\Route;

/*Route*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel', [HomeController::class, 'artikel']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/produk', [HomeController::class, 'product']);
Route::get('/contact', [HomeController::class, 'contact']);

/*Route by id */
Route::get('/artikel/{id}', [HomeController::class, 'ArtikelShow']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductController::class);
    Route::resource('artikels', ArtikelController::class);
    Route::resource('galeris', GaleriController::class);
});

require __DIR__.'/auth.php';
