<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goal extends Model
{
    use HasFactory;
     //Relación uno a muchos , creo una función que apunte a game
      public function game(){
        return $this->belongsTo('App\Models\game');
        }

     //Relación uno a muchos, creo una función que apunte a player
      public function player(){
        return $this->belongsTo('App\Models\player');
        }
}
