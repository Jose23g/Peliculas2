<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Object_;

class PeliculaController extends Controller
{
    public function banner()
    {
        $respuesta = Http::get('https://api.themoviedb.org/3/movie/7555?api_key=c94ae96d76db457ccdb3767fef477a02&language=en-es');
        $populares = Http::get('https://api.themoviedb.org/3/trending/movie/week?api_key=c94ae96d76db457ccdb3767fef477a02&language=en-es');
        $estrenos = Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key=c94ae96d76db457ccdb3767fef477a02&language=en-US&page=1');
       
        $populares = $populares->json();
        $array = $respuesta->json();
        $estrenos = $estrenos->json();
    
        $populares = $populares['results'];
        $estrenos = $estrenos['results'];
        return view('principal', compact('array' , 'populares' , 'estrenos'));
    }
    public function detalle($id)
    {
        $respuesta = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=c94ae96d76db457ccdb3767fef477a02&language=en-es');
        $array = $respuesta->json();
        $cast = Http::get('https://api.themoviedb.org/3/movie/'.$id.'/credits?api_key=c94ae96d76db457ccdb3767fef477a02&language=en-US');
        $elenco = $cast->json();

        return view('detalle', compact('array', 'elenco'));
    }
}
