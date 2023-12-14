@extends('base')

@section('content')
    <h1>Edit Game</h1>
    <form action="{{ route('games.update', ['game' => $game]) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Pre-fill form fields with existing data -->
        <label for="team1_score">Team 1 Score</label>
        <input type="text" name="team1_score" value="{{ $game->team1_score }}" />

        <label for="team2_score">Team 2 Score</label>
        <input type="text" name="team2_score" value="{{ $game->team2_score }}" />

        <!-- Add other form fields as needed -->

        <button type="submit">Update</button>
    </form>
@endsection