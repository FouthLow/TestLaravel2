<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;    
use Illuminate\Support\Facades\Route;

/*Route*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel', [HomeController::class, 'artikel']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/produk', [HomeController::class, 'product']);
Route::get('/contact', [HomeController::class, 'contact']);

/*Route by id */
Route::get('/artikel/{id}', [HomeController::class, 'artikelshow']);
Route::get('/produk/{id}', [HomeController::class, 'productshow']);
Route::get('/galeri/{id}', [HomeController::class, 'galerishow'])->name('galeri.show');
/*Contact */
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

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
    Route::resource('admin/contacts', ContactController::class)->except(['create', 'store', 'edit', 'update']);});

require __DIR__.'/auth.php';
