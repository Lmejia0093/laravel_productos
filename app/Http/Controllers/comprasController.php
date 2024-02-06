<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class comprasController extends Controller
{
    //
    function index(){
     $compras =  Compra::all();

    // return view('/',compact('compras'));
     return response()->json($compras,200);
     
    }
}
