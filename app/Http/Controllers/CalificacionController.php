<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Models\Libro;
use App\Models\Autor;

class CalificacionController extends Controller
{
    public function index(){
      $editorial = Editorial::find(1);
      return $editorial->calificaciones;
      //return csrf_token();
    }

    public function store(){
       $editorial = Editorial::find(1);

       $editorial->calificaciones()->createMany([
            ['calificacion' => 1],
            ['calificacion' => 4],
            ['calificacion' => 3],
            ['calificacion' => 1],
            ['calificacion' => 3],
       ]);
    }

    public function indexLibro(){
      $libro = Libro::find(1);
      return $libro->calificaciones;
      //return csrf_token();
    }

    public function storeLibro(){
       $libro = Libro::find(1);

       $libro->calificaciones()->createMany([
            ['calificacion' => 5],
            ['calificacion' => 4],
       ]);
    }

    public function indexAutor(){
      $autor = Autor::find(1);
      return $autor->calificaciones;
      //return csrf_token();
    }

    public function storeAutor(){
       $autor = Autor::find(1);

       $autor->calificaciones()->create(['calificacion' => 5]);
       $autor->calificaciones()->create(['calificacion' => 3]);
    }
}
