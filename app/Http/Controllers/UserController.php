<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('players.index', compact('user'));
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('players.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('players.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
            'country' => 'required|string|max:255',
            'role' => 'required|string|max:10',
            'team' => 'string|max:255',
            'youtube' => 'string|max:255',
            'twitch' => 'string|max:255',
            'discord' => 'string|max:255',
            'twitter' => 'string|max:255',
            'leaguepedia' => 'string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->summoner_names = $request->input('summoner_names');
        $user->region = $request->input('region');
        $user->country = $request->input('country');
        $user->role = $request->input('role');
        $user->league = $request->input('league');
        $user->team = $request->input('team');
        $user->youtube = $request->input('youtube');
        $user->twitch = $request->input('twitch');
        $user->discord = $request->input('discord');
        $user->twitter = $request->input('twitter');
        $user->leaguepedia = $request->input('leaguepedia');


        $user->save();

        return redirect()->route('players.index')
            ->with('success', 'Player details changed successfully.');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (is_null($user)) {
            return response()->json(["message" => "Player not found."], 404);
        }
        $user->delete();

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully.');
    }
}
