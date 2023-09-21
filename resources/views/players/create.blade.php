@extends('layouts.app')

@section('content')
    <h1>Create Player</h1>

    <form method="POST" action="{{ route('players.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname" required>
        </div>
        <!-- Egyéb mezők... -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
