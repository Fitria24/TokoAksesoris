<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produk;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SuplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});

    route::get('/home',[HomeController::class,'index'])->name('home');

    route::get('/data-produk',[ProdukController::class,'index'])->name('data-produk');
    route::get('/create-produk',[ProdukController::class,'create'])->name('create-produk');
    Route::post('/simpan-produk',[ProdukController::class,'store'])->name('simpan-produk');
    Route::get('/edit-produk/{id}',[ProdukController::class,'edit'])->name('edit-produk');
    Route::post('/update-produk/{id}',[ProdukController::class,'update'])->name('update-produk');
    Route::get('/delete-produk/{id}',[ProdukController::class,'destroy'])->name('delete-produk');

    route::get('/data-pembeli',[PembeliController::class,'index'])->name('data-pembeli');
    route::get('/create-pembeli',[PembeliController::class,'create'])->name('create-pembeli');
    Route::post('/simpan-pembeli',[PembeliController::class,'store'])->name('simpan-pembeli');
    Route::get('/edit-pembeli/{id}',[PembeliController::class,'edit'])->name('edit-pembeli');
    Route::post('/update-pembeli/{id}',[PembeliController::class,'update'])->name('update-pembeli');
    Route::get('/delete-pembeli/{id}',[PembeliController::class,'destroy'])->name('delete-pembeli');


    route::get('/data-suplier',[SuplierController::class,'index'])->name('data-suplier');
    route::get('/create-suplier',[SuplierController::class,'create'])->name('create-suplier');
    Route::post('/simpan-suplier',[SuplierController::class,'store'])->name('simpan-suplier');
    Route::get('/edit-suplier/{id}',[SuplierController::class,'edit'])->name('edit-suplier');
    Route::post('/update-suplier/{id}',[SuplierController::class,'update'])->name('update-suplier');
    Route::get('/delete-suplier/{id}',[SuplierController::class,'destroy'])->name('delete-suplier');