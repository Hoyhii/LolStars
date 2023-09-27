<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiotController extends Controller
{
    public function getSummonerInfo(Request $request)
    {
        $summonerName = urlencode("L5 AlexandR");
        $response = app('RiotApi')->get("/lol/summoner/v4/summoners/by-name/{$summonerName}");

        $data = json_decode($response->getBody(), true);

        // Process and return the data
        return view('test', ['summonerData' => $data]);
    }
}
