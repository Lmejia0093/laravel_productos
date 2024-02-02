<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use PDF;
use Illuminate\Http\Request;

class productoController extends Controller
{
  public function __construct()
  {
  //  $this->middleware('auth');
  }
  //


  public function index()
  {

    $cantidadBuscar = 'hilo white';
    $cantidad = Producto::Where('nombre', 'hilo white')->count();
    $cantidadCategoriaTela = Producto::Where('categoria','tela')->count();
    $cantidadCategoriaHilos = Producto::Where('categoria','hilo')->count();
    $productoTelas = Producto::where('categoria','tela')->get();
    $productoHilos = Producto::where('categoria','hilo')->get();
     // $productos = Producto::all();
   // $productos = Producto::Where('nombre', 'LIKE', $cantidadBuscar);
   return view('Materiales.home', compact('cantidad','cantidadCategoriaTela','productoTelas','productoHilos','cantidadCategoriaHilos'));
 //  return response()->json($productos,200);
  }

  public function destroy($id){

$producto = Producto::find($id);
//$producto = $id;
if ($producto){
 // $producto->delete();
  return   redirect()->route('Materiales.homeDelete',compact('producto'));
}
return  redirect()->back();



     //return view('materiales.homeDelete');
 
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

 public function edit(){

 }

}

