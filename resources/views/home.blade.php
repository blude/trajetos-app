@extends("layouts.app")

@section('content')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="{{ url('/about') }}">Saiba mais</a>.</p>
    <h2>Viagens:</h2>
    <ul>
        @foreach ($trips as $trip)
            <li><a href="{{ url('/trips', $trip->id) }}">{{ $trip->route->number }} - {{ $trip->name }}</a></li>
        @endforeach
    </ul>
    <p>De Vitória para o mundo.</p>
@stop