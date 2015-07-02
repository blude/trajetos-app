@extends('layouts.app')

@section('content')
    <h1>Pontos</h1>
    <div>
        @foreach($points as $point)
            <h3>Ponto #{{ $point->id }}</h3>
            <h3>Linhas</h3>
            <ul>
                @foreach ($point->trips as $trip)
                    <li>{{ $trip->fullName() }}</li>
                @endforeach
            </ul>
            <h3>Detalhes ({!! link_to_route('points.edit', 'Editar', $point->id) !!})</h3>
            <dl>
                <dt>Latitute</dt>
                <dd>{{ $point->lat }}</dd>
                <dt>Longitude</dt>
                <dd>{{ $point->lon }}</dd>
                <dt>Tipo</dt>
                <dd>{{ $point->point_type->label }}</dd>
            </dl>
        @endforeach
    </div>
    <ul>
        <li><a href="{{ route('points.create') }}">Adicionar ponto</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop