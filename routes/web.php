<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', [AboutController::class, 'index']);

Route::get('/layanan', [ServiceController::class, 'index']);

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/kontak', [ContactController::class, 'index'])->name('contact.show');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');
