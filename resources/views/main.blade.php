@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Stars</h1>

        <table class="table table-striped">
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
                    <td>{{ $user->region }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->team }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
