<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/produk', [ProductController::class, 'index'])->name('product.index');
