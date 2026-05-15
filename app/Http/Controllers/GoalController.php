<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\goal;
class GoalController extends Controller
{
    public function pruebas()
{
    $goal = goal::find(2);

    return [
        'goal' => $goal,
        'game' => $goal->game,
        'player' => $goal->player
    ];
}
}
