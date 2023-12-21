<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'points',
        'creator_id',
        'image'
    ];

    /**
     * Get the user that created the team.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}
