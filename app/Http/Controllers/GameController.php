<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameCollection;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(string $username)
    {
        $games = Game::with(['guesses' => function ($query) use ($username) {
            $query->whereHas('user', function ($query) use ($username) {
                $query->where('username', $username);
            });
        }])->get();

        $games = $games->sortBy('game_time');

        return new GameCollection($games);
    }
}
