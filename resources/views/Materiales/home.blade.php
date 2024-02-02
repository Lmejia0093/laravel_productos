@extends('layouts.app')

@section('js')
    <script>
        /**
    document.querySelectorAll('.boton-guardar').forEach(button => {
        button.addEventListener('click', function (event) {
       const btnvalor =  document.getElemntByid('boton-guardar').value;
            event.preventDefault();

            console.log('llego hasta aqui');
            console.log(btnvalor);
        });
    });
    **/
    </script>
@endsection
@section('content')
    <div class="container">
        <button class="btn btn-success" type="submit"> <a href="{{ route()}}"></a>Ingresar</button>
        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



                <div class="card mt-5 ">

                    <div class="card-body bg-success text-white ">
                        <h4 class="card-title">Hilo</h4>
                        <p class="card-text">{{ $cantidadCategoriaHilos }}</p>
                    </div>

                    <table class="table " <thead>
                        <tr>
                            <th ">categoria</th>
                                            <th ">nombre</th>
                            <th ">cantidad</th>
                                            <th ">Eliminar</th>
                            <th ">Editar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                               @foreach ($productoHilos as $productoHilo)
                        <tr>
                            <td>{{ $productoHilo->categoria }} </td>
                            <td>{{ $productoHilo->nombre }} </td>
                            <td>{{ $productoHilo->cantidad }} </td>

                            <td>
                                <form action="{{ route('page.destroy', $productoHilo->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>


                        </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>




                <div class="card mt-5 ">

                    <div class="card-body bg-warning text-white ">
                        <h4 class="card-title">Tela</h4>
                        <p class="card-text">{{ $cantidadCategoriaTela }}</p>
                    </div>

                    <table class="table " <thead>
                        <tr>
                            <th scope="col">categoria</th>
                            <th scope="col">nombre</th>
                            <th scope="col">cantidad</th>
                            <th -2">accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($productoTelas as $productoTela)
                                <tr>
                                    <td>{{ $productoTela->categoria }} </td>
                                    <td>{{ $productoTela->nombre }} </td>
                                    <td>{{ $productoTela->cantidad }} </td>
                                    <td><a href="#" class="btn btn-warning">Editar</a></td>
                                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>







            </div>
        

        </div>

    </div>
@endsection
