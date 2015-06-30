@extends('layouts.app')

@section('content')
    <h1>Viagens</h1>
    <ul>
        @foreach($trips as $trip)
            <li><a href="{{ route('trips.show', $trip->id) }}">{{ $trip->route->number }} - {{ $trip->name }}</a></li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ route('trips.create') }}">Nova Viagem</a></li>
        <li><a href="/">&larr; Voltar</a></li>
    </ul>
@stop