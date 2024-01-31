<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use PDF;
use Illuminate\Http\Request;

class productoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  //


  public function index()
  {

    $cantidadBuscar = '04047';
    $cantidad = Producto::count();
    //  $productos = Producto::where('categoria','c')->get();
    //  $productos = Producto::all();
    $productos = Producto::Where('nombre', 'LIKE', $cantidadBuscar);
    return view('Materiales.home', compact('cantidad', 'productos'));
  }

public function formulario2(){
  return view('Materiales.formulario2');
}

public function formulario3(){
  return view('Materiales.formulario3');
}

 public function store()
 {

return view('Materiales.formulario');

 }

}
