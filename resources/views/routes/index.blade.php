@extends('layouts.app')

@section('content')
    <h1>Linhas</h1>
    <ul>
        @foreach($routes as $route)
            <li><a href="{{ route('routes.show', $route->id) }}">{{ $route->number }} - {{ $route->name }}</a> ({!! link_to_route('routes.edit', 'editar', $route->id) !!})</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ route('routes.create') }}">Nova Linha</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop