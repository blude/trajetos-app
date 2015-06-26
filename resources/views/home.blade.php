@extends("layouts.app")

@section('main')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="/about">Saiba mais.</a></p>
    <h2>Viagens:</h2>
    <ul>
        @foreach ($trips as $trip)
            <li><a href="/trips/{{ $trip->id }}">{{ $routes->where('id', $trip->route_id)->first()->number }}
 - {{ $trip->name }}</a></li>
        @endforeach
    </ul>
    <p>De Vitória para o mundo.</p>
@stop