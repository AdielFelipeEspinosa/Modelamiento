<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});


Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('postRegister',[AuthController::class, 'postRegister'])->name('postRegister');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');