<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;

class PagesController extends Controller
{
    public function games(){
        return view('pages/games');
    }

    public function home(){
        return view('pages/home');
    }

    public function teams(){
        $teams = Team::all();
        return view('pages/teams', compact('teams'));
    }

    public function deleteTeam(Team $team)
    {
        $teamToDelete = Team::find($team->id);
        $teamToDelete->delete();
        return redirect()->back()->with('success', 'Team deleted successfully');
    }

    public function deleteGame(Game $game)
    {
        $gameToDelete = Game::find($game->id);
        $gameToDelete->delete();
        return redirect()->back()->with('success', 'Game deleted successfully');
    }
    
}
