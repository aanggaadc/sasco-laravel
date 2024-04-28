<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', [AboutController::class, 'index']);

Route::get('/layanan', [ServiceController::class, 'index']);

Route::get('/produk', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('welcome');
});
