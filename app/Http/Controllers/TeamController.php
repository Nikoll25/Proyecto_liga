<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
class TeamController extends Controller
{
    public function pruebas()
{
    $team = team::find(5);

    return [
        'team' => $team,
        'president' => $team->president,
        'players' => $team->players,
        'games' => $team->games
    ];
}
}
