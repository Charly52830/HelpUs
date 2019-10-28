<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //


    public function publicacion()
    {
      return $this->belongsTo(Publicacion::class);
    }
}
