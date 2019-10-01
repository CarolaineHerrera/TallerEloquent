<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editoriales';
    
      protected $fillable = [
        'nombre'
                               
    ]; 

   public function libros()
    {
        return $this->hasMany('App\Models\Libro');
    } 

    public function capitulos()
    {
        return $this->hasManyThrough('App\Models\Capitulo', 'App\Models\Libro');
    }
}
