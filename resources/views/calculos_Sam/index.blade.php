@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
       

            <h4 class="card-title">Paso 1 Llena de Formulario</h4>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                <div class="sidebar-item search-form">
                  
                    <form action="{{ route('getOrden')}}" class="mt-3" >
                      <input name="orden" id="orden" type="text">
                      <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                  </div><!-- End sidebar search formn-->

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
                    <button class="btn btn-primary" type="submit"><a href="#">Buscar</a></button>
                    <small id="helpId" class="form-text text-muted">Debes de digitar la Orden a Buscar</small>
             
                </div>
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
            
                
        
            
            

            <button type="submit" class="btn btn-success bg-warning text-primary"" <a
                    href="{{ route('materiales.formulario2') }}" >Siguiente</a></button>

            
                </div>
       
    </div>
 
</div>
@endsection

