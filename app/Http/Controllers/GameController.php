<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;

class GameController extends Controller
{
    public function create(){
        return view('Game.create');
    }
public function store(Request $request)
{
    $game = new Game();

    $game->date = $request->date;
    $game->local_goals = $request->local_goals;
    $game->away_goals = $request->away_goals;

    $game->save();

    return $game;
}
}