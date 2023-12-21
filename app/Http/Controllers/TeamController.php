<?php
// app/Http/Controllers/TeamController.php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'creator_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('item_images', 'public');

        // Create a new team
        $team = Team::create([
            'name' => $request->input('name'),
            'points' => 0,
            'creator_id' => $request->input('creator_id'),
            'image' => $imagePath,
        ]);

        // You can add any additional logic here, e.g., redirect to a success page
        return redirect()->route('teams')->with('success', 'Team created successfully');
    }
}
