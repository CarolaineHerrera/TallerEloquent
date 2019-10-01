<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    
      protected $fillable = [
        'nombre',
        'apellido',
        'autor_libro_id'
                      
    ]; 


    

     public function informaciones()
    {
        return $this->hasOne('App\Models\Informacion');
    } 

    public function autores_libros_alumnos()
    {
        return $this->hasMany('App\Models\Autor_Libro_Alumno');
    } 
}
