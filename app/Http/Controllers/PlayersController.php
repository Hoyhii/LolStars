<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the players.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('welcome', compact('players'));
    }

    /**
     * Show the form for creating a new player.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created player in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|max:255',
            'summoner_names' => 'required|array|min:1|max:255',
            'region' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'role' => 'required|string|max:10',
            'league' => 'string|max:255',
            'team' => 'string|max:255',
            'youtube' => 'string|max:255',
            'twitch' => 'string|max:255',
            'discord' => 'string|max:255',
            'twitter' => 'string|max:255',
            'leaguepedia' => 'string|max:255',
        ]);

        $player = new Player([
            'nickname' => $request->input('nickname'),
            'summoner_names' => $request->input('summoner_names'),
            'region' => $request->input('region'),
            'country' => $request->input('country'),
            'role' => $request->input('role'),
            'league' => $request->input('league'), //kiszedni
            'team' => $request->input('team'),
            'youtube' => $request->input('youtube'),
            'twitch' => $request->input('twitch'),
            'discord' => $request->input('discord'),
            'twitter' => $request->input('twitter'),
            'leaguepedia' => $request->input('leaguepedia'),
            //I need to gather rank, winrate,games trough league database
        ]);

        $player->save();

        return redirect()->route('players.index')
            ->with('success', 'Player added successfully.');
    }

    /**
     * Display the specified player.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified player.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified player in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nickname' => 'required|string|max:255',
            'summoner_names' => 'required|array|min:1|max:255',
            'region' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'role' => 'required|string|max:10',
            'league' => 'string|max:255',
            'team' => 'string|max:255',
            'youtube' => 'string|max:255',
            'twitch' => 'string|max:255',
            'discord' => 'string|max:255',
            'twitter' => 'string|max:255',
            'leaguepedia' => 'string|max:255',
        ]);

        $player = Player::findOrFail($id);
        $player->nickname = $request->input('nickname');
        $player->summoner_names = $request->input('summoner_names');
        $player->region = $request->input('region');
        $player->country = $request->input('country');
        $player->role = $request->input('role');
        $player->league = $request->input('league');
        $player->team = $request->input('team');
        $player->youtube = $request->input('youtube');
        $player->twitch = $request->input('twitch');
        $player->discord = $request->input('discord');
        $player->twitter = $request->input('twitter');
        $player->leaguepedia = $request->input('leaguepedia');


        $player->save();

        return redirect()->route('players.index')
            ->with('success', 'Player details changed successfully.');
    }

    /**
     * Remove the specified player from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        if (is_null($player)) {
            return response()->json(["message" => "Player not found."], 404);
        }
        $player->delete();

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully.');
    }

    public function scrape($id){ //gotta make it work!!!
        $client = new Client();

        $crawler = $client->request('GET', 'https://op.gg/your-player-profile');

        $games = $crawler->filter('.games-class')->text();
        $winrate = $crawler->filter('.winrate-class')->text();

        $player = new Player();
        $player->games = $games;
        $player->winrate = $winrate;
        $player->save();
    }
}
