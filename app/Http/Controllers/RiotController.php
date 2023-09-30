<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RiotController extends Controller
{
    public function getSummonerInfo(Request $request)
    {
        $riotApiKey = env('RIOT_API_KEY');

        $username = urlencode("Hoyhi");

        $response = Http::get("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$username}", [
            'api_key' => $riotApiKey,
        ]);

        $data = $response->json();
        $summonerId = $data["id"];

        $responsev2 = Http::get("https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/{$summonerId}", [
            'api_key' => $riotApiKey,
        ]);
        $responsev2 = Http::get("https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/{$summonerId}", [
            'api_key' => $riotApiKey,
        ]);
        $userData = $responsev2->json();

        //dd($userData[0]['summonerName']);

        return view('test', compact('userData'));
    }
}
