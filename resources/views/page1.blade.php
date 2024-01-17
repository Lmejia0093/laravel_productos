@extends('layouts.app')


@section('content')
    <div class="card">

        <div class="card-body ">
            <h4 class="card-title">Productos</h4>
            <p class="card-text">{{ $cantidad }}</p>
        </div>

    </div>


    @foreach ($productos as $producto)
        <ul>
            <li> {{ $producto->nombre }} </li>
        </ul>
    @endforeach
    

@endsection
