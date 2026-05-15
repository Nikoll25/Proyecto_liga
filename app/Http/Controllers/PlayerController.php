<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;
class PlayerController extends Controller
{
        public function pruebas()
{
    $player = player::find(3);

    return [
        'player' => $player,
        'goals' => $player->goals,
        'team' => $player->team
    ];
}
}
