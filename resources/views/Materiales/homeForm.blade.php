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

                <div class="mb-3">

                    <label for="" class="form-label">Categoria</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option selected>---Seleccionar--</option>
                        <option>JERSEY</option>
                        <option>FELT</option>
                        <option>CANVAS</option>
                        <option>HILOS</option>


                    </select>


                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="" id="" aria-describedby="helpId"
                        placeholder="0000" />
                    <small id="helpId" class="form-text text-muted">La cantidad a ingresar</small>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>
@endsection
