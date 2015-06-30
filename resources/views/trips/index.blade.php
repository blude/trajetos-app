@extends('layouts.app')

@section('content')
    <h1>Viagens</h1>
    <ul>
        @foreach($trips as $trip)
            <li><a href="{{ route('trips.show', $trip->id) }}">{{ $trip->route->number }} - {{ $trip->name }}</a> ({!! link_to_route('trips.edit', 'editar', $trip->id) !!})</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ route('trips.create') }}">Nova Viagem</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop