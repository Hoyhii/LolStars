<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('players.update', $user->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Nickname</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password', $user->password) }}">
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $user->role) }}">
                            </div>

                            <div class="form-group">
                                <label for="team">Team</label>
                                <input type="text" class="form-control" id="team" name="team" value="{{ old('team', $user->team) }}">
                            </div>

                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $user->youtube) }}">
                            </div>

                            <div class="form-group">
                                <label for="twitch">Twitch</label>
                                <input type="text" class="form-control" id="twitch" name="twitch" value="{{ old('twitch', $user->twitch) }}">
                            </div>

                            <div class="form-group">
                                <label for="discord">Discord</label>
                                <input type="text" class="form-control" id="discord" name="discord" value="{{ old('discord', $user->discord) }}">
                            </div>

                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $user->twitter) }}">
                            </div>

                            <div class="form-group">
                                <label for="leaguepedia">Leaguepedia</label>
                                <input type="text" class="form-control" id="leaguepedia" name="leaguepedia" value="{{ old('leaguepedia', $user->leaguepedia) }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
