<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\comprasController;
use App\Http\Controllers\ordenesController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\samController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[productoController::class,'index'])->name('page.index');
Route::delete('/indexEliminar/{id}',[productoController::class,'destroy'])->name('page.destroy');
Route::get('/categoriaNew',[categoriaController::class,'index'])->name('categoriaNew');
Route::post('/categoriaStore',[categoriaController::class,'store'])->name('categoriaStore');
//Route::put('/index.edit/{id}',[productoController::class,'edit'])->name('page.edit');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index',[productoController::class,'index'])->name('index.page1');
Route::get('/ingresoMateriales',[productoController::class,'store'])->name('materiales.formulario');
Route::get('/ingresoMateriales2',[productoController::class,'formulario2'])->name('materiales.formulario2');
Route::get('/ingresoMateriales3',[productoController::class,'formulario3'])->name('materiales.formulario3');
Route::get('/compras',[comprasController::class,'index'])->name('compras.index');
Route::get('/HojaSam',[samController::class,'index'])->name('Hoja.Sam');
Route::get('/Hojabuscar',[ordenesController::class,'index_buscar'])->name('Hoja.buscar');
Route::get('/Hojabuscar/{ORD}',[ordenesController::class,'getOrden'])->name('getOrden');
