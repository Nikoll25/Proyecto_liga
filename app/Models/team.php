<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

      protected $fillable = [
        'name',
        'city',
        'stadium',
        'capacity',
        'year_of_foundation',
        'president_id',
    ];
     //Relación uno a uno, creo una función que apunte a president
      public function president(){
        return $this->belongsTo('App\Models\president');
        }
     //Relación uno a muchos(inverso), creo una función que apunte a player
      public function players(){
        return $this->hasMany('App\Models\player');
        }
     //Relación de muchos a muchos, creo una función que apunte a game
      public function games(){
        return $this->belongsToMany('App\Models\game');
        }
}
