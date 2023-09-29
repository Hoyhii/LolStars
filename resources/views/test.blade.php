@extends('layouts.app')

@section('content')

<head>
    <title>Riot API Test</title>
</head>
<body>
<h1>Riot API Test</h1>
<h2>Felhasználó adatai:</h2>
<pre>
        {{ json_encode($userData, JSON_PRETTY_PRINT) }}
    </pre>
</body>


@endsection
