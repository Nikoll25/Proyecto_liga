<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameTeamController;

//rutas para game
Route::get('game/create',[GameController::class,'create']);
Route::post('game/store',[GameController::class,'store'])->name('game.store');

//rutas para president
Route::get('president/create',[PresidentController::class,'create']);
Route::post('president/store',[PresidentController::class,'store'])->name('president.store');

//rutas para player
Route::get('player/create',[PlayerController::class,'create']);
Route::post('player/store',[PlayerController::class,'store'])->name('player.store');

//rutas para goal
Route::get('goal/create',[GoalController::class,'create']);
Route::post('goal/store',[GoalController::class,'store'])->name('goal.store');

//rutas para team
Route::get('team/create',[TeamController::class,'create']);
Route::post('team/store',[TeamController::class,'store'])->name('team.store');

//rutas para gameteam
Route::get('gameteam/create',[GameTeamController::class,'create']);
Route::post('gameteam/store',[GameTeamController::class,'store'])->name('gameteam.store');