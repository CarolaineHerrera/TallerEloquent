<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
     public function index()
    {
        $libro = Libro::with('autor')->get();
        return csrf_token();
    }


    public function store()
    {

    $libro = new Libro;

    $libro->titulo   = 'cien años de soledad';
    $libro->sinopsis = 'obra maestra de la literatura';
    $libro->genero   = 'Saga familiar, Ficción épica';

    $libro->save();

    $autor = new Autor;
    
    $autor->nombre   = 'Gabriel';
    $autor->apellido = 'García Márquez';

    $libro->autor()->save($autor);

  }

  public function storeRentasAttach()
    {
        $libro = Libro::find(1);
        $libro->autores()->attach([1]);

    }

    public function storeRentasSync()
    {
        $libro = Libro::find(1);
        $libro->autores()->sync([2]);
    }

}




