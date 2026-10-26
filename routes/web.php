<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/kategori', [KategoriController::class, 'index'])->name ('kategori.index');
