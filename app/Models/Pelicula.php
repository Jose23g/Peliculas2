<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $id;
    public $titulo;
    public $poster_fondo;
    public $poster_foto;
    public $generos;
    public $descripcion;
    use HasFactory;

    public function __construct()
    {
    }
}
