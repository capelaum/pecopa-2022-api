<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'userId' => $this->user_id,
            'username' => $this->user->username,
            'gameId' => $this->game_id,
            'homeTeamScore' => $this->home_team_score,
            'awayTeamScore' => $this->away_team_score,
            'createdAt' => $this->created_at,
        ];
    }
}
