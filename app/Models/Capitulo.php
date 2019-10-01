<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $table = 'capitulos';
    
 protected $fillable = [
        'nombre',
        'num_capitulo',
        'editorial_id'
                        
    ]; 

     public function libros()
    {
        return $this->belongsTo('App\Models\Libro');
    }
}
