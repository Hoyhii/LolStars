<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'League of Legends Champions Korea',
                'shortname' => 'LCK',
                'region' => 'KR',
                'tier' => '1',
            ],
            [
                'name' => 'League of Legends EMEA Championship',
                'shortname' => 'LEC',
                'region' => 'EMEA',
                'tier' => '1',
            ],
            [
                'name' => 'League Championship Series',
                'shortname' => 'LCS',
                'region' => 'NA',
                'tier' => '1',
            ],
            [
                'name' => 'Pacific Championship Series',
                'shortname' => 'PCS',
                'region' => 'TW',
                'tier' => '1',
            ],
            [
                'name' => 'Vietnam Championship Series',
                'shortname' => 'VCS',
                'region' => 'VN',
                'tier' => '1',
            ],
            [
                'name' => 'Campeonato Brasileiro de League of Legends',
                'shortname' => 'CBLOL',
                'region' => 'BR',
                'tier' => '1',
            ],
            [
                'name' => 'League of Legends Japan League',
                'shortname' => 'LJL',
                'region' => 'JP',
                'tier' => '1',
            ],
            [
                'name' => 'Liga Latinoamérica',
                'shortname' => 'LLA',
                'region' => 'LAN',
                'tier' => '1',
            ],
            [
                'name' => 'League of Legends Circuit Oceania',
                'shortname' => 'LCO',
                'region' => 'OCE',
                'tier' => '2',
            ],
            [
                'name' => 'EMEA Masters',
                'shortname' => 'EMEA',
                'region' => 'EMEA',
                'tier' => '2',
            ],
            [
                'name' => 'North American Challengers League',
                'shortname' => 'NACL',
                'region' => 'NA',
                'tier' => '2',
            ],
            [
                'name' => 'La Ligue Francaise',
                'shortname' => 'LFL',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Türkiye Championship League',
                'shortname' => 'TCL',
                'region' => 'TR',
                'tier' => '3',
            ],
            [
                'name' => 'LVP Superliga',
                'shortname' => 'LVP',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Prime League Division 1',
                'shortname' => 'PRM',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Ultraliga',
                'shortname' => 'UL',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Northern League of Legends Championship',
                'shortname' => 'NLC',
                'region' => 'EMEA',
                'tier' => '3',
            ], [
                'name' => 'PG Nationals ',
                'shortname' => 'PG',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Liga Portuguesa de League of Legends',
                'shortname' => 'LPLOL',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Greek Legends League',
                'shortname' => 'GLL',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'Arabian League',
                'shortname' => 'AL',
                'region' => 'EMEA',
                'tier' => '3',
            ],
            [
                'name' => 'LCK Challengers League',
                'shortname' => 'LCKCL',
                'region' => 'KR',
                'tier' => '2',
            ]
        ];

        DB::table('leagues')->insert($data);
    }
}
