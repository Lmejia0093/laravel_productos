<?php

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[productoController::class,'index'])->name('page.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index',[productoController::class,'index'])->name('index.page1');