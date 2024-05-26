<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});


Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('postRegister',[AuthController::class, 'postRegister'])->name('postRegister');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('shop', [ProductoController::class, 'index'])->name('shop');
Route::middleware(['Admin'])->group(function () {
    Route::get('createShop', [ProductoController::class, 'create'])->name('createShop');
    Route::post('postProducto', [ProductoController::class, 'postProducto'])->name('postProducto');
});

/*
Route::middleware(['Admin'])->group(function () {
    Route::get('rol', [RolController::class, 'index'])->name('rol');
    Route::get('createRol', [RolController::class, 'create'])->name('createRol');
    Route::post('editRol', [RolController::class, 'edit'])->name('editRol');
    Route::post('uptadeRol', [RolController::class, 'update'])->name('uptadeRol');
    Route::post('deleteRol', [RolController::class, 'destroy'])->name('deleteRol');
});*/
Route::middleware(['Admin'])->group(function () {
    Route::resource('Rol', RolController::class);
});
