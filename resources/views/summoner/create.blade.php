@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Summoner</div>
                        <div class="card-body">
                            <form action="/summoner" enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <div class="form-group">
                                    <label for="summoner_name" class="form-label">Summoner Name</label>
                                    <input type="text" class="form-control" id="summoner_name" name="summoner_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="region" class="form-label">Region</label>
                                    <select id="region" name="region">
                                        @foreach($regions as $key => $name)
                                            <option value="{{ $key }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
