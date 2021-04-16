@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="titulo-categoria">

             Categoría: {{$categoriaReceta->nombre}}
        </h2>

        <div class="row">
            @foreach ($recetas as $receta )

            @include('ui.receta')

            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $recetas->links()}}
        </div>

    </div>

@endsection
