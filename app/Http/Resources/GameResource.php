<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'group' => $this->group,
            'round' => $this->round,
            'gameTime' => $this->game_time,
            'homeTeam' => [
                'name' => $this->home_team_name,
                'slug' => $this->home_team_slug,
            ],
            'awayTeam' => [
                'name' => $this->away_team_name,
                'slug' => $this->away_team_slug,
            ],
            'guesses' => new GuessCollection($this->guesses),
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}
