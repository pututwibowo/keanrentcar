<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/armada', function () {
    return view('armada');
})->name('armada');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');