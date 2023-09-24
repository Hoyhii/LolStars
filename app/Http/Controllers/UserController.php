<?php

namespace App\Http\Controllers;

use App\Models\SummonerName;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        $summoners = $user->summoner_names;
        return view('players.index', compact('user','summoners'));
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
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'password' => 'required|string|min:8|max:255',
            'country' => 'required|string|max:255',
            'role' => 'required|string|max:10',
            'team' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'twitch' => 'nullable|string|max:255',
            'discord' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'leaguepedia' => 'nullable|string|max:255',
        ]);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'country' => $request->input('country'),
            'role' => $request->input('role'),
            'team' => $request->input('team'),
            'youtube' => $request->input('youtube'),
            'twitch' => $request->input('twitch'),
            'discord'=> $request->input('discord'),
            'twitter' => $request->input('twitter'),
            'leaguepedia' => $request->input('leaguepedia'),
        ]);

        return redirect("/player/{$user->id}/profile")
            ->with('success', 'Player details changed successfully.');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (is_null($user)) {
            return response()->json(["message" => "Player not found."], 404);
        }
        $user->delete();

        return redirect("/")
            ->with('success', 'Player deleted successfully.');
    }
}
