
@extends('layouts.app')

@section('titulo','prueba page')
    
@endsection


@foreach ($productos as $producto )



<h3>{{ $producto->nombre }}</h3>
    
@endforeach