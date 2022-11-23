<?php

namespace Database\Seeders;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{

    private $groupPhaseGames = [
        [
            'game_time' => '2022-11-20T13:00:00Z',
            'home_team_slug' => 'CAT',
            'home_team_name' => 'Catar',
            'away_team_slug' => 'EQU',
            'away_team_name' => 'Equador',
            'group' => 'A',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-21T13:00:00Z',
            'home_team_slug' => 'SEN',
            'home_team_name' => 'Senegal',
            'away_team_slug' => 'HOL',
            'away_team_name' => 'Holanda',
            'group' => 'A',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-25T10:00:00Z',
            'home_team_slug' => 'CAT',
            'home_team_name' => 'Catar',
            'away_team_slug' => 'SEN',
            'away_team_name' => 'Senegal',
            'group' => 'A',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-25T13:00:00Z',
            'home_team_slug' => 'HOL',
            'home_team_name' => 'Holanda',
            'away_team_slug' => 'EQU',
            'away_team_name' => 'Equador',
            'group' => 'A',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-29T12:00:00Z',
            'home_team_slug' => 'HOL',
            'home_team_name' => 'Holanda',
            'away_team_slug' => 'CAT',
            'away_team_name' => 'Catar',
            'group' => 'A',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-29T12:00:00Z',
            'home_team_slug' => 'EQU',
            'home_team_name' => 'Equador',
            'away_team_slug' => 'SEN',
            'away_team_name' => 'Senegal',
            'group' => 'A',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-21T10:00:00Z',
            'home_team_slug' => 'ING',
            'home_team_name' => 'Inglaterra',
            'away_team_slug' => 'IRA',
            'away_team_name' => 'Irã',
            'group' => 'B',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-21T16:00:00Z',
            'home_team_slug' => 'EUA',
            'home_team_name' => 'Estados Unidos',
            'away_team_slug' => 'GAL',
            'away_team_name' => 'País de Gales',
            'group' => 'B',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-25T07:00:00Z',
            'home_team_slug' => 'GAL',
            'home_team_name' => 'País de Gales',
            'away_team_slug' => 'IRA',
            'away_team_name' => 'Irã',
            'group' => 'B',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-25T16:00:00Z',
            'home_team_slug' => 'ING',
            'home_team_name' => 'Inglaterra',
            'away_team_slug' => 'EUA',
            'away_team_name' => 'Estados Unidos',
            'group' => 'B',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-29T16:00:00Z',
            'home_team_slug' => 'IRA',
            'home_team_name' => 'Irã',
            'away_team_slug' => 'EUA',
            'away_team_name' => 'Estados Unidos',
            'group' => 'B',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-29T16:00:00Z',
            'home_team_slug' => 'GAL',
            'home_team_name' => 'País de Gales',
            'away_team_slug' => 'ING',
            'away_team_name' => 'Inglaterra',
            'group' => 'B',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-22T07:00:00Z',
            'home_team_slug' => 'ARG',
            'home_team_name' => 'Argentina',
            'away_team_slug' => 'ARA',
            'away_team_name' => 'Arábia Saudita',
            'group' => 'C',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-22T13:00:00Z',
            'home_team_slug' => 'MEX',
            'home_team_name' => 'México',
            'away_team_slug' => 'POL',
            'away_team_name' => 'Polônia',
            'group' => 'C',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-26T10:00:00Z',
            'home_team_slug' => 'POL',
            'home_team_name' => 'Polônia',
            'away_team_slug' => 'ARA',
            'away_team_name' => 'Arábia Saudita',
            'group' => 'C',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-26T16:00:00Z',
            'home_team_slug' => 'ARG',
            'home_team_name' => 'Argentina',
            'away_team_slug' => 'MEX',
            'away_team_name' => 'México',
            'group' => 'C',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-30T16:00:00Z',
            'home_team_slug' => 'POL',
            'home_team_name' => 'Polônia',
            'away_team_slug' => 'ARG',
            'away_team_name' => 'Argentina',
            'group' => 'C',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-30T16:00:00Z',
            'home_team_slug' => 'ARA',
            'home_team_name' => 'Arábia Saudita',
            'away_team_slug' => 'MEX',
            'away_team_name' => 'México',
            'group' => 'C',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-22T10:00:00Z',
            'home_team_slug' => 'DIN',
            'home_team_name' => 'Dinamarca',
            'away_team_slug' => 'TUN',
            'away_team_name' => 'Tunísia',
            'group' => 'D',
            'round' => 'Rodada 1',
        ],

        [
            'game_time' => '2022-11-22T16:00:00Z',
            'home_team_slug' => 'FRA',
            'home_team_name' => 'França',
            'away_team_slug' => 'AUS',
            'away_team_name' => 'Austrália',
            'group' => 'D',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-26T07:00:00Z',
            'home_team_slug' => 'TUN',
            'home_team_name' => 'Tunísia',
            'away_team_slug' => 'AUS',
            'away_team_name' => 'Austrália',
            'group' => 'D',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-26T13:00:00Z',
            'home_team_slug' => 'FRA',
            'home_team_name' => 'França',
            'away_team_slug' => 'DIN',
            'away_team_name' => 'Dinamarca',
            'group' => 'D',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-30T12:00:00Z',
            'home_team_slug' => 'TUN',
            'home_team_name' => 'Tunísia',
            'away_team_slug' => 'FRA',
            'away_team_name' => 'França',
            'group' => 'D',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-30T12:00:00Z',
            'home_team_slug' => 'AUS',
            'home_team_name' => 'Austrália',
            'away_team_slug' => 'DIN',
            'away_team_name' => 'Dinamarca',
            'group' => 'D',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-23T10:00:00Z',
            'home_team_slug' => 'ALE',
            'home_team_name' => 'Alemanha',
            'away_team_slug' => 'JAP',
            'away_team_name' => 'Japão',
            'group' => 'E',
            'round' => 'Rodada 1',
        ],

        [
            'game_time' => '2022-11-23T13:00:00Z',
            'home_team_slug' => 'ESP',
            'home_team_name' => 'Espanha',
            'away_team_slug' => 'CRC',
            'away_team_name' => 'Costa Rica',
            'group' => 'E',
            'round' => 'Rodada 1',
        ],

        [
            'game_time' => '2022-11-27T07:00:00Z',
            'home_team_slug' => 'JAP',
            'home_team_name' => 'Japão',
            'away_team_slug' => 'CRC',
            'away_team_name' => 'Costa Rica',
            'group' => 'E',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-27T16:00:00Z',
            'home_team_slug' => 'ESP',
            'home_team_name' => 'Espanha',
            'away_team_slug' => 'ALE',
            'away_team_name' => 'Alemanha',
            'group' => 'E',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-12-01T16:00:00Z',
            'home_team_slug' => 'JAP',
            'home_team_name' => 'Japão',
            'away_team_slug' => 'ESP',
            'away_team_name' => 'Espanha',
            'group' => 'E',
            'round' => 'Rodada 3',
        ],

        [
            'game_time' => '2022-12-01T16:00:00Z',
            'home_team_slug' => 'CRC',
            'home_team_name' => 'Costa Rica',
            'away_team_slug' => 'ALE',
            'away_team_name' => 'Alemanha',
            'group' => 'E',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-11-23T07:00:00Z',
            'home_team_slug' => 'MAR',
            'home_team_name' => 'Marrocos',
            'away_team_slug' => 'CRO',
            'away_team_name' => 'Croácia',
            'group' => 'F',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-23T16:00:00Z',
            'home_team_slug' => 'BEL',
            'home_team_name' => 'Bélgica',
            'away_team_slug' => 'CAN',
            'away_team_name' => 'Canadá',
            'group' => 'F',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-27T10:00:00Z',
            'home_team_slug' => 'BEL',
            'home_team_name' => 'Bélgica',
            'away_team_slug' => 'MAR',
            'away_team_name' => 'Marrocos',
            'group' => 'F',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-27T13:00:00Z',
            'home_team_slug' => 'CRO',
            'home_team_name' => 'Croácia',
            'away_team_slug' => 'CAN',
            'away_team_name' => 'Canadá',
            'group' => 'F',
            'round' => 'Rodada 2',
        ],

        [
            'game_time' => '2022-12-01T12:00:00Z',
            'home_team_slug' => 'CRO',
            'home_team_name' => 'Croácia',
            'away_team_slug' => 'BEL',
            'away_team_name' => 'Bélgica',
            'group' => 'F',
            'round' => 'Rodada 3',
        ],

        [
            'game_time' => '2022-12-01T12:00:00Z',
            'home_team_slug' => 'CAN',
            'home_team_name' => 'Canadá',
            'away_team_slug' => 'MAR',
            'away_team_name' => 'Marrocos',
            'group' => 'F',
            'round' => 'Rodada 3',
        ],


        [
            'game_time' => '2022-11-24T07:00:00Z',
            'home_team_slug' => 'SUI',
            'home_team_name' => 'Suíça',
            'away_team_slug' => 'CAM',
            'away_team_name' => 'Camarões',
            'group' => 'G',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-24T16:00:00Z',
            'home_team_slug' => 'BRA',
            'home_team_name' => 'Brasil',
            'away_team_slug' => 'SER',
            'away_team_name' => 'Sérvia',
            'group' => 'G',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-28T07:00:00Z',
            'home_team_slug' => 'CAM',
            'home_team_name' => 'Camarões',
            'away_team_slug' => 'SER',
            'away_team_name' => 'Sérvia',
            'group' => 'G',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-28T13:00:00Z',
            'home_team_slug' => 'BRA',
            'home_team_name' => 'Brasil',
            'away_team_slug' => 'SUI',
            'away_team_name' => 'Suíça',
            'group' => 'G',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-12-02T16:00:00Z',
            'home_team_slug' => 'CAM',
            'home_team_name' => 'Camarões',
            'away_team_slug' => 'BRA',
            'away_team_name' => 'Brasil',
            'group' => 'G',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-12-02T16:00:00Z',
            'home_team_slug' => 'SER',
            'home_team_name' => 'Sérvia',
            'away_team_slug' => 'SUI',
            'away_team_name' => 'Suíça',
            'group' => 'G',
            'round' => 'Rodada 3',
        ],

        [
            'game_time' => '2022-11-24T10:00:00Z',
            'home_team_slug' => 'URU',
            'home_team_name' => 'Uruguai',
            'away_team_slug' => 'COR',
            'away_team_name' => 'Coreia do Sul',
            'group' => 'H',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-24T13:00:00Z',
            'home_team_slug' => 'POR',
            'home_team_name' => 'Portugal',
            'away_team_slug' => 'GAN',
            'away_team_name' => 'Gana',
            'group' => 'H',
            'round' => 'Rodada 1',
        ],
        [
            'game_time' => '2022-11-28T10:00:00Z',
            'home_team_slug' => 'COR',
            'home_team_name' => 'Coreia do Sul',
            'away_team_slug' => 'GAN',
            'away_team_name' => 'Gana',
            'group' => 'H',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-11-28T16:00:00Z',
            'home_team_slug' => 'POR',
            'home_team_name' => 'Portugal',
            'away_team_slug' => 'URU',
            'away_team_name' => 'Uruguai',
            'group' => 'H',
            'round' => 'Rodada 2',
        ],
        [
            'game_time' => '2022-12-02T12:00:00Z',
            'home_team_slug' => 'COR',
            'home_team_name' => 'Coreia do Sul',
            'away_team_slug' => 'POR',
            'away_team_name' => 'Portugal',
            'group' => 'H',
            'round' => 'Rodada 3',
        ],
        [
            'game_time' => '2022-12-02T12:00:00Z',
            'home_team_slug' => 'GAN',
            'home_team_name' => 'Gana',
            'away_team_slug' => 'URU',
            'away_team_name' => 'Uruguai',
            'group' => 'H',
            'round' => 'Rodada 3',
        ],
    ];

    private $knockoutPhaseGames = [
        [
            'game_time' => '2022-12-03T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [
            'game_time' => '2022-12-03T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [
            'game_time' => '2022-12-04T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-04T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-05T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-05T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-06T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-06T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Oitavas de final',
        ],
        [

            'game_time' => '2022-12-09T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Quartas de final',
        ],
        [

            'game_time' => '2022-12-09T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Quartas de final',
        ],
        [

            'game_time' => '2022-12-10T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Quartas de final',
        ],
        [

            'game_time' => '2022-12-10T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Quartas de final',
        ],
        [

            'game_time' => '2022-12-13T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Semifinal',
        ],
        [

            'game_time' => '2022-12-14T16:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Semifinal',
        ],
        [

            'game_time' => '2022-12-17T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Disputa pelo 3º lugar',
        ],
        [

            'game_time' => '2022-12-18T12:00:00Z',
            'home_team_slug' => '?',
            'home_team_name' => 'A confirmar',
            'away_team_slug' => '?',
            'away_team_name' => 'A confirmar',
            'round' => 'Final',
        ]
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public
    function run()
    {
        foreach ($this->groupPhaseGames as $game) {
            $game['game_time'] = Carbon::parse($game['game_time']);
            $game['created_at'] = now();
            $game['updated_at'] = now();
            Game::insert($game);
        }

        foreach ($this->knockoutPhaseGames as $game) {
            $game['game_time'] = Carbon::parse($game['game_time']);
            $game['created_at'] = now();
            $game['updated_at'] = now();
            Game::insert($game);
        }

    }
}
