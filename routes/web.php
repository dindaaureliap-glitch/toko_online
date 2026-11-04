<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Pindahkan "use" ke paling atas

Route::get('/', function () {
    return view('welcome');
});

// Route untuk melihat daftar produk skincare ditaruh di luar fungsi route utama

Route::get('/products', [ProductController::class, 'index']);
Route::get('/profile', [ProductController::class, 'profile']);
Route::get('/products/{id}', [ProductController::class, 'show']);