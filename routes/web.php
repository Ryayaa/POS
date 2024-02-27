<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;



Route::get('/Home', [HomeController::class, 'index']);

Route::get('/Products', [ProductsController::class, 'index']);

Route::prefix('kategori')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health ', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care  ', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid   ', [ProductsController::class, 'babyKid']);
});


Route::get('/User/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/Penjualan', [PenjualanController::class, 'index']);