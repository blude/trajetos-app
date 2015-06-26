@extends('layouts.app')

@section('main')
    <p><a href="/">&larr; Voltar</a></p>
    <h1>{{ $route->number }} - {{ $trip->name }}</h1>
@stop