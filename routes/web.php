<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');


Route::controller(ProductController::class)->prefix('/products')->name('products.')->group(function () {
    Route::get('/flush', 'flush')->name('flush');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});
