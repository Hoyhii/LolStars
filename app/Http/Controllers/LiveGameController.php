<?php

namespace App\Http\Controllers;

use App\Models\LiveGame;
use App\Http\Requests\StoreLiveGameRequest;
use App\Http\Requests\UpdateLiveGameRequest;

class LiveGameController extends Controller
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
    public function store(StoreLiveGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LiveGame $liveGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LiveGame $liveGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLiveGameRequest $request, LiveGame $liveGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LiveGame $liveGame)
    {
        //
    }
}
