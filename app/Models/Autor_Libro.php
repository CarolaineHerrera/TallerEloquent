<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor_Libro extends Model
{
     protected $table = 'autores_libros';
    
      protected $fillable = [
        'autor_id',
        'libro_id',
        
                       
    ]; 

     public function libros()
    {
        return $this->belongsTo('App\Models\Libro');
    }

     public function autores()
    {
        return $this->belongsTo('App\Models\Autor');
    }

     
}
