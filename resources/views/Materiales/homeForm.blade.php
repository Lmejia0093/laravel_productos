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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
<form action="{{ route('categoriaStore')}}" method="post">
    @csrf
                <div class="mb-3">

                    <label for="" class="form-label">Categoria</label>
                    <select class="form-select form-select-lg" name="categoria" id="categoria">
                        <option selected>---Seleccionar--</option>
                        @foreach ($categorias as $categoria )
                            
                        <option>{{ $categoria->nombre }}</option>
                        @endforeach
                        


                    </select>
                </div>
              <div class="mb-3">
                <label for="" class="form-label">nombre</label>
                <input
                    type="text"
                    class="form-control"
                    name="nombre"
                    id="nombre"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Digita el nombre</small>
              </div>
              
               

              
                <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId"
                        placeholder="0000" />
                    <small id="helpId" class="form-text text-muted">La cantidad a ingresar</small>
                </div>

               <button type="submit">Ingresar</button>
            </form>
            </div>
        </div>
    </div>
@endsection
