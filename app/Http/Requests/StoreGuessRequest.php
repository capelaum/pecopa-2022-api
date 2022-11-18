<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'gameId' => 'required|exists:games,id',
            'homeTeamScore' => 'required|integer|min:0|max:30',
            'awayTeamScore' => 'required|integer|min:0|max:30',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'game_id' => $this->gameId,
            'home_team_score' => $this->homeTeamScore,
            'away_team_score' => $this->awayTeamScore,
        ]);
    }
}
