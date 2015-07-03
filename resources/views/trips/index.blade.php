@extends('layouts.admin')

@section('content')
    <h1>Viagens</h1>
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
            @unless ($trips->isEmpty())
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->route->number }}</td>
                        <td>{{ $trip->name }}</td>
                        <td>{!! link_to_route('trips.show', 'ver', $trip->id) !!} - {!! link_to_route('trips.edit', 'editar', $trip->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="4">Nenhuma linha cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
    <ul>
        <li><a href="{{ route('trips.create') }}">Criar Viagem</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop