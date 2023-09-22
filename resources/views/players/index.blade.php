@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Country</th>
            <th>Nickname</th>
            <th>Region</th>
            <th>Role</th>
            <th>Team</th>
            <th>Youtube</th>
            <th>Twitch</th>
            <th>Discord</th>
            <th>Twitter</th>
            <th>Leaguepedia</th>
            <th>Summoners</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->country }}</td>
                <td><a href="{{ route('players.show', $user->id) }}" class="btn btn-info">{{ $user->name }}</a></td>
                <td>{{ $user->region }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->team }}</td>
                <td>{{ $user->youtube }}</td>
                <td>{{ $user->twitch }}</td>
                <td>{{ $user->discord }}</td>
                <td>{{ $user->twitter }}</td>
                <td>{{ $user->leaguepedia }}</td>
                <td>
                    @foreach($summoners as $summoner)
                        {{ $summoner->summoner_name }}, {{ $summoner->region }}
                        <a href="{{ route('summoner.edit', $summoner->id) }}" class="btn btn-primary">Edit Summoner</a>|||
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('summoner.create') }}" class="btn btn-primary">Add Summoner</a>
                    <a href="{{ route('players.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('players.destroy', $user->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
