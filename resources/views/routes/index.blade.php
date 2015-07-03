@extends('layouts.admin')

@section('content')
    <h1>Linhas</h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th>ID</th>
                <th>Número</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @unless ($routes->isEmpty())
                @foreach ($routes as $route)
                    <tr data-route-id="{{ $route->id }}">
                        <td>{{ $route->id }}</td>
                        <td>{{ $route->number }}</td>
                        <td>{{ $route->name }}</td>
                        <td>{!! link_to_route('routes.show', 'ver', $route->id) !!} - {!! link_to_route('routes.edit', 'editar', $route->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center text-muted">Nenhuma linha cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
    <ul>
        <li><a href="{{ route('routes.create') }}">Criar Linha</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop