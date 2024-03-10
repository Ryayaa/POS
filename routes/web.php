<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;



Route::get('/Home', [HomeController::class, 'index']);

Route::get('/Products', [ProductsController::class, 'index']);

Route::prefix('kategori')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health ', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care  ', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid   ', [ProductsController::class, 'babyKid']);
});


Route::get('/user', [UserController::class, 'index']);

Route::get('/Penjualan', [PenjualanController::class, 'index']);

Route::get('level', [LevelController::class,'index']);
Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/user/tambah', [UserController::class,'tambah']);

Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
Route::get('/user/ubah{id}', [UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class,'hapus']);

