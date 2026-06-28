<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use App\Models\president;
class TeamController extends Controller
{
      public function create(){

        $presidents=President::all();
        return view('Team.create',compact('presidents'));

    }

    public function store(Request $request){

     Team::create($request->all());
    }
}
