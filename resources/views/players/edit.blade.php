@extends('layouts.app')

@section('content')
    <h1>Edit Player</h1>

    <form method="POST" action="{{ route('players.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $user->name }}" required>
        </div>
        <!-- Egyéb mezők... -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
