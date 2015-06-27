@extends('layouts.app')

@section('content')
    <h1>Linhas</h1>
    <ul>
        @foreach($routes as $route)
            <li>{{ $route->number }} - {{ $route->name }}</li>
        @endforeach
    </ul>
    <ul>
        <li><a href="{{ url('/routes/create') }}">Nova Linha</a></li>
        <li><a href="/">&larr; Voltar</a></li>
    </ul>
@stop