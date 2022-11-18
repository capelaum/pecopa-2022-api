<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'games';

    protected $fillable = [
        'group',
        'round',
        'game_time',
        'away_team_name',
        'away_team_slug',
        'home_team_name',
        'home_team_slug',
        'created_at',
        'updated_at',
    ];

    public function guesses(): HasMany
    {
        return $this->hasMany(Guess::class);
    }
}
