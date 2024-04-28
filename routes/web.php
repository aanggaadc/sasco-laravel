<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', [AboutController::class, 'index']);

Route::get('/layanan', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('welcome');
});