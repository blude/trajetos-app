@extends("layouts.app")

@section('content')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="{{ url('/about') }}">Saiba mais</a>.</p>
    
    @unless ($routes->isEmpty())
        <h2>{!! link_to_route('admin.routes.index', 'Linhas') !!}</h2>
        <ul>
            @foreach ($routes as $route)
                <li>{!! link_to_route('admin.routes.show', $route->fullName(), $route->id) !!}</a></li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma linha disponível. {!! link_to_route('admin.routes.create', 'Adicionar linha') !!}</p>
    @endunless

    @unless ($trips->isEmpty())
        <h2>{!! link_to_route('admin.trips.index', 'Viagens') !!}</h2>
        <ul>
            @foreach ($trips as $trip)
                <li>{!! link_to_route('admin.trips.show', $trip->fullName(), $trip->id) !!}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma viagem disponível. {!! link_to_route('admin.trips.create', 'Adicionar viagem') !!}</p>
    @endunless
    <p>De Vitória para o mundo.</p>
@stop
