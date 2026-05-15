<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
     //Relación uno a muchos(inverso), creo una función que apunte a goal
      public function goals(){
        return $this->hasMany('App\Models\goal');
        }
     //Relación de muchos a muchos, creo una función que apunte a team
      public function teams(){
        return $this->belongsToMany('App\Models\team');
        }
        
}
