@extends('layouts.app')

@section('main')
    <h1>Viagens</h1>
    <ul>
        @foreach($trips as $trip)
            <li>{{ $trip->route_id }} - {{ $trip->name }}</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ url('/trips/create') }}">Nova Viagem</a></li>
        <li><a href="/">&larr; Voltar</a></li>
    </ul>
@stop