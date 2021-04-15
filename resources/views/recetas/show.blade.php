@extends('layouts.app')

@section('content')

<article class="contenido-receta">

    <h1 class="text-center mb-4">{{$receta->titulo}}</h1>

    <div class="imagen-receta">
        <img src="/storage/{{ $receta->imagen}}"  class="w-50 mx-auto d-block"alt="">
    </div>

    <div class="receta-meta mt-2 text-center">
        <p>
            <span class="font-weight-bold text-primary"> Escrito en:</span>
            {{$receta->categoria->nombre}}
        </p>

        <p>
            <span class="font-weight-bold text-primary"> Autor:</span>
            {{-- todo:mostrae l usuario --}}
            {{$receta->autor->name}}
        </p>

        <p>
            <span class="font-weight-bold text-primary"> Fecha:</span>
            {{-- todo:mostrae l usuario --}}
            @php
                $fecha = $receta->created_at
            @endphp

         <fecha-receta fecha="{{$fecha}}" />
        </p>

        <div class="ingredientes">
            <h2 class="my-3 text-primary">Ingredientes</h2>
            {!! $receta->ingredientes !!}
        </div>

        <div class="preparacion">
            <h2 class="my-3 text-primary">Preparacion</h2>
            {!! $receta->preparacion !!}
        </div>

        <div class="justify-content-center">
            <like-button receta-id="{{ $receta->id}}"
                like="{{$like}}"
                likes="{{ $likes }}"
                ></like-button>
        </div>


    </div>
</article>

<h1></h1>
@endsection
