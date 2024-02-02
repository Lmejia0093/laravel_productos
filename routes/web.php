<?php

use App\Http\Controllers\productoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[productoController::class,'index'])->name('page.index');

//Route::put('/index.edit/{id}',[productoController::class,'edit'])->name('page.edit');

Auth::routes();

Route::delete('/indexEliminar/{id}',[productoController::class,'destroy'])->name('page.destroy');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index',[productoController::class,'index'])->name('index.page1');
Route::get('/ingresoMateriales',[productoController::class,'store'])->name('materiales.formulario');
Route::get('/ingresoMateriales2',[productoController::class,'formulario2'])->name('materiales.formulario2');
Route::get('/ingresoMateriales3',[productoController::class,'formulario3'])->name('materiales.formulario3');