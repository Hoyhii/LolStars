<?php

namespace App\Http\Controllers;

use App\Models\SummonerName;
use App\Http\Requests\StoreSummonerNameRequest;
use App\Http\Requests\UpdateSummonerNameRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SummonerNameController extends Controller
{

    public function create()
    {
        $user = auth()->user();
        $regions = [
            'euw1' => 'EUW',
            'eun1' => 'EUNE',
            'na1' => 'NA',
            'kr' => 'kr',
            'br1' => 'BR',
            'la1' => 'LAN',
            'la2' => 'LAS',
            'oc1' => 'OCE',
            'ru1' => 'RU',
            'tr1' => 'TR',
            'jp1' => 'JP',
            'ph2' => 'PH',
            'sg2' => 'SG',
            'tw2' => 'TW',
            'vn2' => 'VN',
        ];
        return view('summoner.create',compact('user'));
    }
    public function store(StoreSummonerNameRequest $request)
    {
        $user = auth()->user();
        $data = request()->validate([
            'summoner_name' => 'required|string|max:255',
            'region' => 'required|string|max:10',
        ]);

        $riotApiKey = env('RIOT_API_KEY');
        $username = urlencode($data['summoner_name']);

        $response = Http::get("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$username}", [
            'api_key' => $riotApiKey,
        ]);
        $responseJson = $response->json();
        $summonerId = $responseJson["id"];

        $responsev2 = Http::get("https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/{$summonerId}", [
            'api_key' => $riotApiKey,
        ]);

        $userData = $responsev2->json();
        $tier = $userData[0]["tier"];
        $rank = $userData[0]["rank"];
        $wins = $userData[0]["wins"];
        $losses = $userData[0]["losses"];
        $games = $wins + $losses;


        auth()->user()->summoner_names()->create([
            'summoner_name' => $data['summoner_name'],
            'region' => $data['region'],
            'rank' => $tier." ".$rank,
            'winrate' => $wins / $games * 100,
            'games' => $games,
            'wins' => $wins,
            'losses' => $losses,
        ]);

        return redirect("/player/{$user->id}/profile")->with('success', 'Summoner added successfully.');
    }
    public function edit($id)
    {
        $user = auth()->user();
        $summoner_name = SummonerName::findOrFail($id);
        return view('summoner.edit', compact('summoner_name','user'));
    }
    public function update(Request $request, $id)
    {
        $user = auth()->user();

        $summoner_name = SummonerName::findOrFail($id);
        $request->validate([
            'summoner_name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
        ]);




        $riotApiKey = env('RIOT_API_KEY');
        $username = urlencode($request->summoner_name);

        $response = Http::get("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$username}", [
            'api_key' => $riotApiKey,
        ]);
        $responseJson = $response->json();
        $summonerId = $responseJson["id"];

        $responsev2 = Http::get("https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/{$summonerId}", [
            'api_key' => $riotApiKey,
        ]);

        $userData = $responsev2->json();
        $tier = $userData[0]["tier"];
        $rank = $userData[0]["rank"];
        $wins = $userData[0]["wins"];
        $losses = $userData[0]["losses"];
        $games = $wins + $losses;

        $summoner_name->update([
            'summoner_name' => $request->input('summoner_name'),
            'region' => $request->input('region'),
            'rank' => $tier." ".$rank,
            'winrate' => $wins / $games * 100,
            'games' => $games,
            'wins' => $wins,
            'losses' => $losses,
        ]);



        return redirect("/player/{$user->id}/profile")
            ->with('success', 'Summoner details changed successfully.');
    }
    public function destroy(int $id)
    {
        $user = auth()->user();
        $summonerName = SummonerName::findOrFail($id)->delete();
        if (is_null($summonerName)) {
            return response()->json(["message" => "Summoner not found."], 404);
        }
        SummonerName::destroy($id);

        // return redirect()->back();
        return redirect("/player/{$user->id}/profile")->with('success', 'Summoner deleted successfully.');

    }
}
