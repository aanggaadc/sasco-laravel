<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', [AboutController::class, 'index']);

Route::get('/layanan', [ServiceController::class, 'index']);

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/kontak', function () {
    return view('welcome');
});
