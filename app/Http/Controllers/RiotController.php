<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RiotController extends Controller
{
    public function getSummonerInfo(Request $request)
    {
        $user = auth()->user();

        $riotApiKey = env('RIOT_API_KEY');

        $username = urlencode("Hoyhi");

        // Riot API hívás a felhasználó adatainak lekérdezéséhez
        $response = Http::get("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$username}", [
            'api_key' => $riotApiKey,
        ]);

        $userData = $response->json();
        return view('test', compact('userData','user'));
    }
}
