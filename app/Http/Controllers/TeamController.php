<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
    {
        return view('create-team');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teamName' => 'required|string|max:50',
        ]);

        return redirect()->route('teams.create')->with('success', 'Team is aangemaakt!');
    }
}
