@extends('layouts.app')

@section('content')
    <p><a href="/">&larr; Voltar</a></p>
    <h1>{{ $route->fullName() }}</h1>
@stop