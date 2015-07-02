@extends('layouts.app')

@section('content')
    <h1>Ponto #{{ $point->id }}</h1>
    <h2>Linhas</h2>
    <ul>
        @foreach ($point->trips as $trip)
            <li>{{ $trip->fullName() }}</li>
        @endforeach
    </ul>
    <h2>Detalhes ({!! link_to_route('points.edit', 'Editar', $point->id) !!})</h2>
    <dl>
        <dt>Latitute</dt>
        <dd>{{ $point->lat }}</dd>
        <dt>Longitude</dt>
        <dd>{{ $point->lon }}</dd>
        <dt>Tipo</dt>
        <dd>{{ $point->point_type->label }}</dd>
    </dl>
    <p><a href="{{ route('points.index') }}">&larr; Voltar</a></p>
@stop