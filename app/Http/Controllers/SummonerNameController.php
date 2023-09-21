<?php

namespace App\Http\Controllers;

use App\Models\SummonerName;
use App\Http\Requests\StoreSummonerNameRequest;
use App\Http\Requests\UpdateSummonerNameRequest;

class SummonerNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSummonerNameRequest $request)
    {
        $request->validate([
            'summoner_name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SummonerName $summonerName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SummonerName $summonerName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSummonerNameRequest $request, SummonerName $summonerName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SummonerName $summonerName)
    {
        //
    }
}
