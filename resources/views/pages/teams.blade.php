@extends('base')

@section('content')
    <div class="homepage-image">
        <h1>Schoolvoetbal Toernooi</h1>
        <p>teams</p>
    </div>

    <h1>Voetbalteam Aanmaken</h1>

    <form method="post" action="{{ route('teams.store') }}">
        @csrf

        <label for="teamName">Teamnaam:</label>
        <input type="text" id="teamName" name="name" required>

        <button type="submit">Aanmaken</button>
    </form>


@endsection