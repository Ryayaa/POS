<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Home', [HomeController::class, 'index']);

Route::get('/Product', [ProductsController::class, 'index']);

Route::prefix('kategori')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health ', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care  ', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid   ', [ProductsController::class, 'babyKid']);
});


Route::get('/User/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/Penjualan', [PenjualanController::class, 'index']);