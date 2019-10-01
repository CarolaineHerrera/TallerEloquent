<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class CapituloController extends Controller
{
     public function index()
    {
        $libro = Libro::with('capitulos')->get();
        return $libro;
    }

    public function store()
    {
        $libro = Libro::find(1);

        $libro->capitulos()->createMany([
            [
                'nombre'         => 'Inicio',
                'num_capitulo'   => '5'
            ],
            [
                'nombre'         => 'Intermedio',
                'num_capitulo'   => '200'
            ],
            [
                'nombre'         => 'Final',
                'num_capitulo'   => '290'
            ],

        ]);
    }
}
