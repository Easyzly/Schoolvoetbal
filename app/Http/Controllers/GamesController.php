<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GamesController extends Controller
{
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
                    'referee_id' => 1,  
                    'team1_score' => 0,
                    'team2_score' => 0,
                    'field' => 'Field A',  
                    'time' => now(),  
                ]);

                $game->save();
            }
        }

        return redirect()->back()->with('success', 'Random team pool and schedule generated successfully');
    }

    public function showMatches()
    {
        $matches = Game::all();

        return view('matches', compact('matches'));
    }
}

