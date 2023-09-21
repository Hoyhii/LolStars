@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Player Details</h1>

        <p><strong>Nickname: </strong> {{ $user->name }}</p>
        <p><strong>Region: </strong> {{ $user->region }}</p>
        <p><strong>Country: </strong> {{ $user->country }}</p>
        <p><strong>Role: </strong> {{ $user->role }}</p>
        <p><strong>Team: </strong> {{ $user->team }}</p>
        <p><strong>Youtube: </strong> {{ $user->youtube }}</p>
        <p><strong>Twitch: </strong> {{ $user->twitch }}</p>
        <p><strong>Discord: </strong> {{ $user->discord }}</p>
        <p><strong>Twitter: </strong> {{ $user->twitter }}</p>
        <p><strong>Leaguepedia: </strong> {{ $user->leaguepedia }}</p>
        <a href="{{ route('main') }}" class="btn btn-secondary">Back to List</a>

    </div>
@endsection
