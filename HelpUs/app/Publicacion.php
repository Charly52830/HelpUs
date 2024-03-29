<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public function comentario()
    {
      return $this->hasOne(Comentario::class);
    }
    public function  usuario(){
        return $this->belongsTo(User::class,'id');
    }
}
