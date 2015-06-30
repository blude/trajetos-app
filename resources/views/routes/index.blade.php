@extends('layouts.app')

@section('content')
    <h1>Linhas</h1>
    <ul>
        @foreach($routes as $route)
            <li>{!! link_to_route('routes.edit', $route->fullName(), $route->id) !!}</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ route('routes.create') }}">Nova Linha</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop