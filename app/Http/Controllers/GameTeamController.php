<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameTeam;
use App\Models\Team;
use App\Models\Game;
class GameTeamController extends Controller
{
    
    public function create(){

        $teams=Team::all();
        $games=Game::all();
        return view('gameteam.create',compact('teams','games'));

    }

    public function store(Request $request){

     GameTeam::create($request->all());
    }
}
