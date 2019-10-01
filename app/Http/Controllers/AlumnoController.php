<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Informacion;

class AlumnoController extends Controller
{
    public function index()
    {
       $alumno = Alumno::find(1);
       return csrf_token();
    }

    public function store(Request $request){

   $alumno = new Alumno;
   $alumno->nombre   = 'Angela';
   $alumno->apellido = 'Arrieta';
   
   
   $alumno->save();

   $informaciones = new Informacion;
   $informaciones->direccion = 'Sampues';
   $informaciones->telefono  = '3016835821';

   $alumno->informaciones()->save($informaciones);
   
   }
}
