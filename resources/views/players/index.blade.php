@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Nickname</th>
            <th>Country</th>
            <!-- Egyéb mezők... -->
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="{{ route('players.show', $user->id) }}" class="btn btn-info">{{ $user->name }}</a></td>
                <td>{{ $user->country }}</td>
                <td>
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
