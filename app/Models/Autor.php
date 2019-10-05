<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    
      protected $fillable = [
        'nombre',
        'apellido',
                        
    ]; 

    public function autores_libros()
    {
        return $this->hasMany('App\Models\Autor_Libro');
    } 

     public function libros()
    {
        return $this->belongsToMany('App\Models\Libro','autores_libros')->withTimestamps();
    }

    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'ratingable');
    }
}
