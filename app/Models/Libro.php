<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
     protected $table = 'libros';
    
      protected $fillable = [
        'titulo',
        'sinopsis',
        'genero',
        'editorial_id'
                        
    ]; 

    
      
    public function capitulos()
    {
        return $this->hasMany('App\Models\Capitulo');
    }   

    public function editoriales()
    {
        return $this->belongsTo('App\Models\Editorial');
    }

    public function autores()
    {
        return $this->belongsToMany('App\Models\Autor','autores_libros')->withTimestamps();
    }

    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'ratingable');
    }


}
