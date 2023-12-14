<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

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
        // Retrieve the team before deletion
        $teamToDelete = Team::find($team->id);
    
        // Delete the team
        $teamToDelete->delete();
    
        // You can now use $teamToDelete to access the team data before deletion if needed
    
        return redirect()->back()->with('success', 'Team deleted successfully');
    }

    public function generateRandomPool()
        {
            return redirect()->back()->with('success', 'Random team pool generated successfully');
        }
    
}
