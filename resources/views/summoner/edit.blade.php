@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Summoner

                        <form action="{{ route('summoner.destroy', $summoner_name->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>


                    <div class="card-body">
                        <form action="{{ route('summoner.update', $summoner_name->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="summoner_id" value="{{ $summoner_name->id }}">

                            <div class="form-group">
                                <label for="summoner_name">Summoner Name</label>
                                <input type="text" class="form-control" id="summoner_name" name="summoner_name" value="{{ old('summoner_name', $summoner_name->summoner_name) }}">
                            </div>

                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" name="region" value="{{ old('region', $summoner_name->region) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
