<?php

use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "v1/"], function () {
    Route::group(["prefix" => "products"], function () {
        Route::get('/', [ProductController::class, 'index'])->name('all');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('show')->where('id', '[0-9]+');
    })->name('products');
})->name('v1');
