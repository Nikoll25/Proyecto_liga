<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\goal;
use App\Models\Player;
use App\Models\Game;
class GoalController extends Controller
{
      public function create(){

        $players=Player::all();
        $games=Game::all();
        return view('goal.create',compact('players','games'));

    }

    public function store(Request $request){

     Goal::create($request->all());
    }
}
