<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;
use App\Models\Goal;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PagesController extends Controller
{
    public function games()
    {
        $games = Game::all();
        return view('pages/games', compact('games'));
    }

    public function home()
    {
        $teams = Team::all();
        $games = Game::all();
        return view('pages/home', compact('teams', 'games'));
    }

    public function teams()
    {
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

    public function SendGame(Game $game)
    {
        return view('pages/edit/game', compact('game'));
    }

    public function updateGame(Request $request, Game $game)
    {
        // Validate the form data
        $request->validate([
            'team1_score' => 'required|numeric',
            'team2_score' => 'required|numeric',
            // Add validation rules for other fields as needed
        ]);
    
        // Update the game with the form data
        $game->update([
            'team1_score' => $request->input('team1_score'),
            'team2_score' => $request->input('team2_score'),
            // Update other fields as needed
        ]);
        
        $teams = Team::all();
        $games = Game::all();
        return view('dashboard', compact('teams', 'games'));
    }
}
