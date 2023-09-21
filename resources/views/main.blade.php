@extends('layouts.app')

@section('content')
    <h1>Stars</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Country</th>
            <th>Nickname</th>
            <th>Region</th>
            <th>Role</th>
            <th>Team</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->country }}</td>
                <td><a href="{{ route('players.show', $user->id) }}" class="btn btn-info">{{ $user->name }}</a></td>
                <td>{{ $user->region }}</td> <!-- Most akkor, legyen main acc region, vagy a főoldalon ne jelenjen meg? ha igen akkor a fő acc regiont külön tárolni és kiiratni kéne -->
                <td>{{ $user->role }}</td>
                <td>{{ $user->team }}</td>
                <!-- Egyéb mezők... -->
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
