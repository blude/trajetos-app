@extends('layouts.app')

@section('content')
    <h1>{{ $trip->fullName() }}</h1>
    @unless ($trip->points->isEmpty())
        <ul>
            @foreach ($trip->points->all() as $point)
                <li>#{{ $trip->id }} ({{ $point->lat }}, {{ $point->lon }})</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum ponto cadastrado.</p>
    @endunless
    <p><a href="/">&larr; Voltar</a></p>
@stop