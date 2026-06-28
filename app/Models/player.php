<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

      protected $fillable = [
        'name',
        'position',
        'team_id',
    ];
     //Relación uno a muchos, creo una función que apunte a goal
      public function goals(){
        return $this->hasMany('App\Models\goal');
        }
     //Relación uno a muchos, creo una función que apunte a team
      public function team(){
        return $this->belongsTo('App\Models\team');
        }
}
