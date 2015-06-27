@extends('layouts.app')

@section('content')
    <p><a href="/">&larr; Voltar</a></p>
    <h1>{{ $route->number }} - {{ $route->name }}</h1>
@stop