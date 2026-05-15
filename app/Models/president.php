<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class president extends Model
{
    use HasFactory;
     //Relación uno a uno, creo una función que apunte a team
      public function team(){
        return $this->hasOne('App\Models\team');
        }
}
