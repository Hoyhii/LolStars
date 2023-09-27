<!DOCTYPE html>
<html>
<head>
    <title>Summoner Info</title>
</head>
<body>
<h1>Summoner Information</h1>

@if(isset($summonerData))
    <p>Summoner Name: {{ $summonerData['name'] }}</p>
    <p>Summoner Level: {{ $summonerData['summonerLevel'] }}</p>
    <!-- Add more data fields here as needed -->
@else
    <p>Summoner not found.</p>
@endif
</body>
</html>
