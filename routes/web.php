<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MetodePembayaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/kategori', [KategoriController::class, 'index'])->name ('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name ('kategori.create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name ('kategori.store');
Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/satuan', [SatuanController::class, 'index'])->name ('satuan.index');
Route::get('/satuan/create', [SatuanController::class, 'create'])->name ('satuan.create');
Route::post('/satuan/store', [SatuanController::class, 'store'])->name ('satuan.store');
Route::get('/satuan/{satuan}/edit', [SatuanController::class, 'edit'])->name('satuan.edit');
Route::put('/satuan/{satuan}', [SatuanController::class, 'update'])->name('satuan.update');
Route::delete('/satuan/{satuan}', [SatuanController::class, 'destroy'])->name('satuan.destroy');