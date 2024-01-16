<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    //
    public function index(){
        $cantidad = Producto::count();
      //  $productos = Producto::where('categoria','c')->get();
        $productos = Producto::all();
       return view('page1',compact('cantidad','productos'));
       // return view('page');
    }

}