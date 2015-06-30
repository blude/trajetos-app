@extends("layouts.app")

@section('content')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="{{ url('/about') }}">Saiba mais</a>.</p>
    <h2>Linhas:</h2>

    <ul>
        @forelse ($routes as $route)
            <li>{!! link_to_route('routes.edit', $route->fullName(), $route->id) !!}</a></li>
        @empty
            <li>Nenhuma linha disponível.</li>
        @endforelse
    </ul>
    <h2>Viagens:</h2>
    <ul>
        @forelse ($trips as $trip)
            <li>{!! link_to_route('trips.show', $trip->fullName(), $trip->id) !!}</li>
        @empty
            <li>Nenhuma viagem disponível.</li>
        @endforelse
    </ul
    <p>De Vitória para o mundo.</p>
@stop
