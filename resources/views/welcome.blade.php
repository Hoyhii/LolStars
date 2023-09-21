@extends('layouts.app')

@section('content')
    <h1>Stars</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Nickname</th>
            <th>Region</th>
            <th>Country</th>
            <th>Role</th>
            <th>Team</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="{{ route('players.show', $user->id) }}" class="btn btn-info">{{ $user->name }}</a></td>
                <td>{{ $user->region }}</td> <!-- Most akkor, legyen main acc region, vagy a főoldalon ne jelenjen meg? ha igen akkor a fő acc regiont külön tárolni és kiiratni kéne -->
                <td>{{ $user->country }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->team }}</td>
                <!-- Egyéb mezők... -->
                <td>
                    <a href="{{ route('players.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    <!-- Törlés gomb formmal -->
                    <form action="{{ route('players.destroy', $user->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
