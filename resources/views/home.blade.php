@extends("layouts.app")

@section('content')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="{{ url('/about') }}">Saiba mais</a>.</p>
    <h2>Linhas:</h2>

    <ul>
        @forelse ($routes as $route)
            <li><a href="{{ url('/routes', $route->id) }}">{{ $route->number }} - {{ $route->name }}</a></li>
        @empty
            <li>Nenhuma linha disponível.</li>
        @endforelse
    </ul>
    <h2>Viagens:</h2>
    <ul>
        @forelse ($trips as $trip)
            <li><a href="{{ url('/trips', $trip->id) }}">{{ $trip->route->number }} - {{ $trip->name }}</a></li>
        @empty
            <p>Nenhuma viagem disponível.</p>
        @endforelse
    </ul
    <p>De Vitória para o mundo.</p>
@stop