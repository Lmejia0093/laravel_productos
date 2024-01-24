@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">

                <div class="card mt-5 ">

                    <div class="card-body bg-warning text-white ">
                        <h4 class="card-title">Ordenes Pendiente</h4>
                        <p class="card-text">{{ $cantidad }}</p>
                    </div>
                    @foreach ($productos as $producto)
                        <ul>
                            <li> {{ $producto->nombre }} </li>
                        </ul>
                    @endforeach
                </div>

                

            </div>

            <div class="col-3">

                <div class="card mt-5 ">

                    <div class="card-body bg-success text-white ">
                        <h4 class="card-title">Ordenes facturas</h4>
                        <p class="card-text">{{ $cantidad }}</p>
                    </div>
                    @foreach ($productos as $producto)
                        <ul>
                            <li> {{ $producto->nombre }} </li>
                        </ul>
                    @endforeach
                </div>

                

            </div>


            <div class="col-3">

                <div class="card mt-5 ">

                    <div class="card-body bg-secondary text-white ">
                        <h4 class="card-title">Compras</h4>
                        <p class="card-text">{{ $cantidad }}</p>
                    </div>
                    @foreach ($productos as $producto)
                        <ul>
                            <li> {{ $producto->nombre }} </li>
                        </ul>
                    @endforeach
                </div>

                

            </div>


            <div class="col-3">

                <div class="card mt-5 ">

                    <div class="card-body bg-primary text-white ">
                        <h4 class="card-title">ventas</h4>
                        <p class="card-text">{{ $cantidad }}</p>
                    </div>
                    @foreach ($productos as $producto)
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li> {{ $producto->nombre }}    </li>
                              
                            </ul>
                        </div>
                        <div class="col-3">
                            <input class="btn btn-success" type="button" value="edit">
                        </div>
                    </div>
                      
                    @endforeach
                </div>

                

            </div>
    
        </div>

        


    </div>
@endsection
