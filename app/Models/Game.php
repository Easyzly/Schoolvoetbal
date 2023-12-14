<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team1_id',
        'team2_id',
        'referee_id',
        'team1_score',
        'team2_score',
        'field',
        'time',
    ];

    /**
     * Get the first team in the game.
     */
    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }    

    /**
     * Get the second team in the game.
     */
    public function awayTeam()
{
    return $this->belongsTo(Team::class, 'team2_id');
}

    /**
     * Get the referee for the game.
     */
    public function referee()
    {
        return $this->belongsTo(User::class, 'referee_id');
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }
}
