@extends('layouts.app')

@section('content')
    <h1>Viagens</h1>
    <ul>
        @foreach($trips as $trip)
            <li>{!! link_to_route('trips.edit', $trip->fullName(), $trip->id) !!}</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ route('trips.create') }}">Nova Viagem</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop