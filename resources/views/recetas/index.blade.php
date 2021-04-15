<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layouts.app')


    @section('botones')

    @include('ui.nav')
    @endsection
    @section('content')
    <h2 class="text-center mb-5">Administra tus Recetas</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Categoria</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($recetas as $receta)

                <tr>
                    <td>{{$receta->titulo}}</td>
                    <td>{{$receta->categoria->nombre}}</td>
                    <td>

                        <eliminar-receta receta-id="{{ $receta->id }}" > </eliminar-receta>
                        {{-- <form action="{{ route('recetas.destroy', ['receta' => $receta->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit"  class="btn btn-danger mb-2 d-block w-100" value="Eliminar &times;">
                        </form> --}}

                        <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-dark mb-2 d-block">Editar</a>
                        <a href="{{ action('RecetaController@show', ['receta' => $receta->id]) }}" class="btn btn-success mb-2 d-block">Ver</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

        <div class="col-12 mt-4 justify-content-center d-flex">
            {{ $recetas->links()}}
        </div>

            <h2 class="text-center my-5">Recetas que te gustan</h2>
            <div class="col-md-10 mx-auto bg-white p-3">

                @if(count($usuario->meGusta) > 0 )


                <ul class="list-group">
                    @foreach ($usuario->meGusta as $receta )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>{{ $receta->titulo}}</p>
                        <a href="{{ action('RecetaController@show', ['receta' => $receta->id]) }}" class="btn btn-success mb-2 d-block">Ver</a>
                    </li>
                    @endforeach

                </ul>

                @else
                <p class="text-center">Sin Recetas guardadas</p>

                @endif
            </div>
    </div>

    @endsection

</body>
</html>
