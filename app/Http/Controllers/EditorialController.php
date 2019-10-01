<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editorial;
use App\Models\Libro;

class EditorialController extends Controller
{
   public function index()
    {
       $editorial = Editorial::with('libros')->get();
       return $editorial;
    }

    public function store()
    {
        $editorial = new Editorial;

        $editorial->nombre = 'Little, Brown and company';

        $editorial->save();

        $editorial->libros()->saveMany([

            new Libro([
                'titulo'   => 'La hija de humo y hueso',
                'sinopsis' => 'Erase una vez un angel y un demonio',
                'genero'   => 'Fantasia',
                
            ]),
            new Libro([
                'titulo'   => 'El sobrino del mago',
                'sinopsis' => 'La historia Diggory y Polly',
                'genero'   => 'Fantasia',
               
            ]),
            new Libro([
                'titulo'   => 'La ultima batalla ',
                'sinopsis' => 'Encontrando la tierra prometida',
                'genero'   => 'Fantasia',
            ]),
            
        ]);
    }


    public function getEditoriales()
    {
        $editorial = Editorial::with('capitulos')->get();
        return $editorial;
    }
}
