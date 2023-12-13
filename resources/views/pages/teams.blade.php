@extends('base')

@section('content')
    <div class="homepage-image">
        <h1>Schoolvoetbal Toernooi</h1>
        <p>teams:</p>

        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->points }}</td>
        </tr>
    @endforeach
    </div>
@endsection