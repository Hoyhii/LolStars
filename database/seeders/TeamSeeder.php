<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'league_id' => '1',
                'name' => 'Hanwa Life Esports',
                'shortname' => 'HLE',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'Dplus Kia',
                'shortname' => 'DK',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'KT Rolster',
                'shortname' => 'KT',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'OKSavingsBank BRION',
                'shortname' => 'BRO',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'T1',
                'shortname' => 'T1',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'Gen.G',
                'shortname' => 'GEN',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'KWANGDONG FREECS',
                'shortname' => 'KDF',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'DRX',
                'shortname' => 'DRX',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'Nongshim Redforce',
                'shortname' => 'NS',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '1',
                'name' => 'Liiv SANDBOX',
                'shortname' => 'LSB',
                'country' => 'South Korea',
            ],
            [
                'league_id' => '2',
                'name' => 'G2 Esports',
                'shortname' => 'G2',
                'country' => 'Spain',
            ],
            [
                'league_id' => '2',
                'name' => 'Astralis',
                'shortname' => 'AST',
                'country' => 'Denmark',
            ],
            [
                'league_id' => '2',
                'name' => 'EXCEL',
                'shortname' => 'XL',
                'country' => 'United Kingdom',
            ],
            [
                'league_id' => '2',
                'name' => 'Fnatic',
                'shortname' => 'FNC',
                'country' => 'United Kingdom',
            ],
            [
                'league_id' => '2',
                'name' => 'MAD Lions',
                'shortname' => 'MAD',
                'country' => 'Spain',
            ],
            [
                'league_id' => '2',
                'name' => 'Team Heretics',
                'shortname' => 'TH',
                'country' => 'Spain',
            ],
            [
                'league_id' => '2',
                'name' => 'SK Gaming',
                'shortname' => 'SK',
                'country' => 'Germany',
            ],
            [
                'league_id' => '2',
                'name' => 'KOI',
                'shortname' => 'KOI',
                'country' => 'Spain',
            ],
            [
                'league_id' => '2',
                'name' => 'Team BDS',
                'shortname' => 'BDS',
                'country' => 'Switzerland',
            ],
            [
                'league_id' => '2',
                'name' => 'Team Vitality',
                'shortname' => 'VIT',
                'country' => 'France',
            ],
            [
                'league_id' => '3',
                'name' => '100 Thieves',
                'shortname' => '100T',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'Dignitas',
                'shortname' => 'DIG',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'Evil Geniuses',
                'shortname' => 'EG',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'FlyQuest',
                'shortname' => 'FLY',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'Golden Guardians',
                'shortname' => 'GG',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'Immortals',
                'shortname' => 'IMT',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'NRG',
                'shortname' => 'NRG',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'Team Liquid',
                'shortname' => 'TL',
                'country' => 'United States',
            ],
            [
                'league_id' => '3',
                'name' => 'TSM',
                'shortname' => 'TSM',
                'country' => 'United States',
            ],
            [
                'league_id' => '4',
                'name' => 'CTBC FLYING OYSTER',
                'shortname' => 'CFO',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'Deep Cross Gaming',
                'shortname' => 'DCG',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'Dewish Team',
                'shortname' => 'DWT',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'Impunity Esports',
                'shortname' => 'IMP',
                'country' => 'Singapore',
            ],
            [
                'league_id' => '4',
                'name' => 'Beyond Gaming',
                'shortname' => 'BYG',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'Hell Pigs',
                'shortname' => 'HPS',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'PSG Talon',
                'shortname' => 'PSG',
                'country' => 'Hong Kong',
            ],
            [
                'league_id' => '4',
                'name' => 'West Point Esports',
                'shortname' => 'WP',
                'country' => 'Philippines',
            ],
            [
                'league_id' => '4',
                'name' => 'Taipei J Team',
                'shortname' => 'JT',
                'country' => 'Taiwan',
            ],
            [
                'league_id' => '4',
                'name' => 'Frank Esports',
                'shortname' => 'FAK',
                'country' => 'Hong Kong',
            ],
            ];

        DB::table('teams')->insert($data);
    }
}
