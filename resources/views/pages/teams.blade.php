@extends('base')

@section('content')
    <div class="homepage-image">
        <h1>Schoolvoetbal Toernooi</h1>
        <p>teams:</p>

        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->points }}</td>
            <td>
                @if($team->image)
                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }} Image" style="max-width: 100px; max-height: 100px;">
                @else
                    No Image
                @endif
            </td>
        </tr>
    @endforeach
    </div>
@endsection