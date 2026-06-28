<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;
use App\Models\Team;
class PlayerController extends Controller
{
      public function create(){

        $teams=Team::all();
        return view('player.create',compact('teams'));

    }

    public function store(Request $request){

     Player::create($request->all());
    }
}
