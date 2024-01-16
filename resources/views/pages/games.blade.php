@extends('base')

@section('content')
<div class="widgetholder">
    <h1>Komende Wedstrijden:</h1>
    @foreach($games as $game)
    @if($game->time >= $mytime = Carbon\Carbon::now())
        <div class="widget">
            <h2>{{ $game->team1_score }} / {{ $game->team2_score }}</h2>
            <div class="info">
                <p>{{ $game->team1->name }} vs {{ $game->team2->name }}</p>
                <p>{{ $game->field}} | {{ $game->time }}</p>
            </div>
        </div>
    @endif
    @endforeach

    <h1>Oude Wedstrijden:</h1>
    @foreach($games as $game)
    @if($game->time < $mytime = Carbon\Carbon::now())
        <div class="widget">
            <h2>{{ $game->team1_score }} / {{ $game->team2_score }}</h2>
            <div class="info">
                <p>{{ $game->team1->name }} vs {{ $game->team2->name }}</p>
                <p>{{ $game->field}} | {{ $game->time }}</p>
            </div>
        </div>
    @endif
    @endforeach
</div>
@endsection