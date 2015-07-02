@extends('layouts.admin')

@section('content')
    <h1>{{ $route->fullName() }}</h1>
    @unless ($route->trips->isEmpty())
        <ul>
            @foreach ($route->trips->all() as $trip)
                <li>{!! link_to_route('trips.show', $trip->fullName(), $trip->id) !!} ({!! link_to_route('trips.edit', 'editar', $trip->id) !!})</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Nenhuma linha cadastrada.</p>
    @endunless
    <p><a href="{{ route('routes.index') }}">&larr; Voltar</a></p>
@stop