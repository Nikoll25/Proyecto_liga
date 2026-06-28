<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\president;
class PresidentController extends Controller
{
        public function create(){
        return view('President.create');
    }
public function store(Request $request)
{
    $president = new President();

    $president->name = $request->name;
    $president->year = $request->year;

    $president->save();

    return $president;
}
}
