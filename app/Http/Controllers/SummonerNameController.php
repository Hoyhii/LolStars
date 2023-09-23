<?php

namespace App\Http\Controllers;

use App\Models\SummonerName;
use App\Http\Requests\StoreSummonerNameRequest;
use App\Http\Requests\UpdateSummonerNameRequest;
use Illuminate\Http\Request;

class SummonerNameController extends Controller
{

    public function create()
    {
        $user = auth()->user();
        return view('summoner.create',compact('user'));
    }
    public function store(StoreSummonerNameRequest $request)
    {
        $user = auth()->user();
        $data = request()->validate([
            'summoner_name' => 'required|string|max:255',
            'region' => 'required|string|max:10',
            //I need to gather rank, winrate,games trough league database
        ]);

        auth()->user()->summoner_names()->create([
            'summoner_name' => $data['summoner_name'],
            'region' => $data['region'],
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
        $summoner_name->update([
            'summoner_name' => $request->input('summoner_name'),
            'region' => $request->input('region'),
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
