@extends('base')

@section('content')
<div class="widgetholder">
    <h1>Teams:</h1>
    @foreach($teams as $team)
    <div class="widget">
        <td>{{ $team->name }}</td>
         <div class="info">
            <td>Punten: {{ $team->points }}</td>
        </div>
    </div>
    @endforeach
</div>
@endsection