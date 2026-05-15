<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;

class GameController extends Controller
{
     public function pruebas()
{
    $game = game::find(1);

    return [
        'game' => $game,
        'goals' => $game->goals,
        'teams' => $game->teams
    ];
}
}
