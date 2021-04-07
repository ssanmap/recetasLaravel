<a href="{{route('recetas.create')}}" class="btn btn-outline-primary mr-2 font-weight-bold">
    <svg xmlns="http://www.w3.org/2000/svg" class="icono h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
      </svg>
    Crear Receta</a>
<a href="{{route('perfiles.edit', ['perfil' => $usuario->id ])}}" class="btn btn-outline-secondary mr-2 ">
    <svg xmlns="http://www.w3.org/2000/svg" class="icono h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
      </svg>
    Editar Perfil</a>
<a href="{{route('perfiles.show', ['perfil' => Auth::user()->id ])}}" class="btn btn-outline-success mr-2 ">
    <svg xmlns="http://www.w3.org/2000/svg" class="icono h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    Ver Perfil</a>
