<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('welcome');
});

Route::get('/layanan', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('welcome');
});
