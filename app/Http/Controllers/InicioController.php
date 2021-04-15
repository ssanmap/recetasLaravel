<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaReceta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{


    public function index(){


        // Mostrar las recetas x cantidad de votos
        // $votadas = Receta::has('likes', '>', 1)->get();
        $votadas = Receta::withCount('likes')->orderBy('likes_count', 'desc')->take(3)->get();

          //obtener las recetas mas nuevas

        $nueva = Receta::latest()->take(5)->get();
        // $chilena = Receta::where('categoria_id', 3)->get();
        // return $chilena;
        $categorias = CategoriaReceta::all();
        $recetas = [];
        foreach ($categorias as $categoria) {

            $recetas[ Str::slug($categoria->nombre) ] [] = Receta::where('categoria_id', $categoria->id)->get();

        }

        // return $recetas;


        // return $nueva;
        return view('inicio.index', compact('nueva', 'recetas', 'votadas'));
    }
}
