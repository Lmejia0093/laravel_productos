<?php

namespace App\Http\Controllers;

use App\Models\OrdenActive;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;



class ordenesController extends Controller
{
    //ORD-2288682
        //  return response()->json($productos,200);
    function index_buscar()
    {
   $ORD = 'ORD-'.'2288682';

        $ordenes = OrdenActive::where('PO Number','like',$ORD)->get();
        
        return Response()->json($ordenes,200);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orden = new OrdenActive();
        $orden->categoria = $request->input('orden');
  
        $orden->save();;
          return redirect()->route('index.page1');
         
    }

    public function getOrden($ORD)
    {
        //

        $ORD = 'ORD-'.$ORD;

        $ordenes = OrdenActive::where('PO Number','like',$ORD)->get();
        return Response()->json($ordenes,200);

    }
  

}
