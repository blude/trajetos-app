@extends('layouts.app')

@section('content')
    <p><a href="/">&larr; Voltar</a></p>
    <h1>{{ $trip->route->number }} - {{ $trip->name }}</h1>
@stop