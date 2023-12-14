<?php

// app/Models/Goal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ['player_id', 'match_id', 'time'];

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }

    public function match()
    {
        return $this->belongsTo(Game::class, 'match_id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
