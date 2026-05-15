<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\president;
class PresidentController extends Controller
{
    public function pruebas()
{
    $president = president::find(4);

    return [
        'president' => $president,
        'team' => $president->team
    ];
}
}
