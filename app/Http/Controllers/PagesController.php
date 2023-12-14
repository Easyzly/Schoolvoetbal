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

    public function generateRandomPool()
{
    $teams = Team::all();

    Game::query()->delete();

    $totalTeams = count($teams);

    for ($i = 0; $i < $totalTeams - 1; $i++) {
        for ($j = $i + 1; $j < $totalTeams; $j++) {
            $game = new Game([
                'team1_id' => $teams[$i]->id,
                'team2_id' => $teams[$j]->id,
            ]);

            $game->save();
        }
    }

    return redirect()->back()->with('success', 'Random team pool and schedule generated successfully');
}

    public function deleteGame(Game $game)
    {
        $gameToDelete = Game::find($game->id);
        $gameToDelete->delete();
        return redirect()->back()->with('success', 'Game deleted successfully');
    }
    
}
