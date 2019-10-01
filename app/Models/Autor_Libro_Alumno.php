<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor_Libro_Alumno extends Model
{
    protected $table = 'autores_libros';
    
      protected $fillable = [
        'alumno_id',
        'libro_id',
        
                       
    ]; 

     public function libros()
    {
        return $this->belongsTo('App\Models\Libro');
    }

     public function alumno()
    {
        return $this->belongsTo('App\Models\Alumnos');
    }
}
