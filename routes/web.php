<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');});

Route::get('/',[WelcomeController::class,'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);                                // Menampilkan data user
    Route::post('/list', [UserController::class, 'list']);                       // menampilkan data user dalam bentukjson untuk datatables
    Route::get('/create', [UserController::class, 'create']);                  // menampilkan form tambah user
    Route::post('/', [UserController::class, 'store']);                         // menyimpan data user
    Route::get('/{id}', [UserController::class, 'show']);                        // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);                   // menampilkan form edit user
    Route::put('/{id}', [UserController::class, 'update']);                    // mengupdate data user
    Route::delete('/{id}', [UserController::class, 'destroy']);               // menghapus data user
});                           


// Route::get('/Home', [HomeController::class, 'index']);

// Route::get('/Products', [ProductsController::class, 'index']);

// Route::prefix('kategori')->group(function () {
//     Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
//     Route::get('/beauty-health ', [ProductsController::class, 'beautyHealth']);
//     Route::get('/home-care  ', [ProductsController::class, 'homeCare']);
//     Route::get('/baby-kid   ', [ProductsController::class, 'babyKid']);
// });


// Route::get('/user', [UserController::class, 'index']);

// Route::get('/Penjualan', [PenjualanController::class, 'index']);

// Route::get('level', [LevelController::class,'index']);
// // Route::get('/kategori', [KategoriController::class,'index']);
// Route::get('/user/tambah', [UserController::class,'tambah']);

// Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
// Route::get('/user/ubah{id}', [UserController::class,'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class,'hapus']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/kategori', [KategoriController::class, 'index']);

// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::resource('m_user', POSController::class);

// Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
// Route::put('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
// Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.delete');
// Route::get('/kategori/create',[KategoriController::class, 'create'])->name('kategori.create');
