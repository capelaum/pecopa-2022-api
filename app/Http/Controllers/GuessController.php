<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuessRequest;
use App\Http\Resources\GuessCollection;
use App\Http\Resources\GuessResource;
use App\Models\Game;
use App\Models\Guess;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuessController extends Controller
{
    /**
     * @param StoreGuessRequest $request
     * @return JsonResponse
     */
    public function store(StoreGuessRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['game_id'] = $request->game_id;
        $data['home_team_score'] = $request->home_team_score;
        $data['away_team_score'] = $request->away_team_score;

        $gameId = $data['game_id'];

        $game = Game::find($gameId);

        if ($game->game_time < now()) {
            return response()->json([
                'message' => 'Você não pode fazer palpites para jogos que já começaram.'
            ], 422);
        }

        $guess = Guess::create($data);

        return response()->json([
            'guess' => new GuessResource($guess),
            'message' => 'Palpite criado com sucesso!'
        ]);
    }

    /**
     * @param string $username
     * @return GuessCollection
     */
    public function user(string $username): GuessCollection
    {
        $user = User::where('username', $username)->firstOrFail();

        $guesses = $user->guesses;

        $guesses = $guesses->sortBy('game.game_time');

        return new GuessCollection($guesses);
    }
}
