<?php

namespace App\Http\Controllers;

use App\Perfil;
use App\Receta;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //obtener recetas con paginacion

        $recetas = Receta::where('user_id', $perfil->user_id)->paginate(2);

        return view('perfiles.show', compact('perfil', 'recetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //

        $this->authorize('view', $perfil);
        return view('perfiles.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {

        // ejecutar el policy

        $this->authorize('update', $perfil);
        //validar

        $data = request()->validate([
            'nombre' => 'required',
            'url' => 'required',
            'biografia' => 'required'
        ]);

        // si el usuario sube una imagen

        if( $request['imagen']){

               // ruta
        $ruta_imagen = $request['imagen']->store('upload-perfiles', 'public');
        // resolucion
        $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,550);
        $img->save();
        // asignar al objeto

            $array_imagen = ['imagen' => $ruta_imagen];
        }

        // return auth()->user();
        // asogmar nombre y url
        auth()->user()->name = $data['nombre'];
        auth()->user()->url = $data['url'] ;
        //actualizamos con
        auth()->user()->save();
       //necesitamos eliminar url y name de $data porque sino va a querer inyectar eso en la tabla de perfils pero como no existen esos campos entonces va a dar error
        unset($data['url']);
        unset($data['nombre']);
       //return $data;
        auth()->user()->perfil()->update(array_merge(
                $data,
                $array_imagen ?? []
                ) );
// array merge lo ves en las siguientes lecciones
       //redireccionar a recetas
       return redirect()->action('RecetaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
