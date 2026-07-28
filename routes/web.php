<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::controller(ProfileController::class)->name('profile.')->prefix('/profile')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(ProductController::class)->prefix('/products')->name('products.')->group(function () {
    Route::get('/flush', 'flush')->name('flush');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});
