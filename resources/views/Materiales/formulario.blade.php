@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
           

                <h4 class="card-title">Paso 1 Llena de Formulario</h4>

                <div class="mb-12">
                    <label for="" class="form-label">Categoria</label>
                    <select
                        class="form-select form-select-lg"
                        name=""
                        id=""
                    >
                        <option selected>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>
                
                    
                <div class="mb-12">
                    <label for="" class="form-label">Materiales</label>
                    <input
                        type="text"
                        class="form-control"
                        name="codmateriales"
                        id="codmateriales"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Debes de digitar la cantidad</small>
                </div>
                
                

                <button type="submit" class="btn btn-success bg-warning text-primary"" <a
                        href="{{ route('materiales.formulario2') }}" >Siguiente</a></button>

                

           
        </div>
        <script>

        
                
        </script>
    </div>
@endsection

