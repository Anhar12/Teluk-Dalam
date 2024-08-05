<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Desa Teluk Dalam'
    ]);
})->name('beranda');

Route::get('/profil-desa', function () {
    return view('profil', [
        'title' => 'Profil Desa Teluk Dalam'
    ]);
})->name('profil');

Route::get('/transparasi', function () {
    return view('transparasi', [
        'title' => 'Transparasi Desa Teluk Dalam'
    ]);
})->name('transparasi');

Route::get('/pemerintahan-desa', function () {
    return view('pemerintahan', [
        'title' => 'Pemerintahan Desa Teluk Dalam'
    ]);
})->name('pemerintahan');

Route::get('/informasi-publik', function () {
    return view('informasi', [
        'title' => 'Informasi Publik Desa Teluk Dalam'
    ]);
})->name('informasi');

Route::get('/potensi-inovasi', function () {
    return view('potensi', [
        'title' => 'Potensi & Inovasi Desa Teluk Dalam'
    ]);
})->name('potensi&inovasi');
