@extends("layouts.app")

@section('main')
    <h1>Trajetos</h1>
    <p>Veja pontos de referência, fotos, mapas, vias e nunca mais desça no ponto errado. <a href="/about">Saiba mais.</a></p>
    <h2>Linhas disponíveis:</h2>
    <ul>
        @foreach ($routes as $route)
            <li>{{ $route->number }} - {{ $route->name }}</li>
        @endforeach
    </ul>
    <h2>Viagens:</h2>
    <ul>
        <li><a href="/trip/1">164 - Forte São João</a></li>
        <li><a href="/trip/2">164 - Jardim Camburi</a></li>
    </ul>
    <p>De Vitória para o mundo.</p>
@stop