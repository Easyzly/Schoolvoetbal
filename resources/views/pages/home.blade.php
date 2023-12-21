@extends('base')

@section('content')
<div class="widgetholder">
    <h1>Komende Wedstrijden:</h1>
    @foreach($games as $game)
    <div class="widget">

        <div class="info">
            <h2>{{ $game->team1->name }} </h2>
            <h2>{{ $game->team1_score }} / {{ $game->team2_score }}</h2>
            <h2> {{ $game->team2->name }}</h2>
            <p>{{ $game->field}} | {{ $game->time }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection