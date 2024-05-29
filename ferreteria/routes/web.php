<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});


Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('shop', [ProductoController::class, 'mostrar'])->name('shop');

Route::middleware(['Admin'])->group(function () {
    Route::resource('Producto', ProductoController::class);
});

Route::middleware(['Admin'])->group(function () {
    Route::resource('Rol', RolController::class);
});

Route::middleware(['Cliente'])->group(function () {
    Route::get('User/{User}/edit', [UserController::class, 'edit'])->name('User.edit');
    Route::post('User/{User}', [UserController::class, 'update'])->name('User.update');
    Route::resource('User', UserController::class);
});
