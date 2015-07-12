@extends('layouts.admin-sidebar')

@section('content')
    <h1>Ponto <small>#{{ $point->id }}</small></h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th>ID</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr data-point-id="{{ $point->id }}">
                <td>{{ $point->id }}</td>
                <td>{{ $point->lat }}</td>
                <td>{{ $point->lon }}</td>
                <td>{{ $point->point_type->label }}</td>
                <td>
                    {!! link_to_route('points.show', 'ver', $point->id) !!} - 
                    {!! link_to_route('points.edit', 'editar', $point->id) !!}
                </td>
            </tr>
        </tbody>
    </table>
@stop

@section ('sidebar')
    <h2>Linhas</h2>
    @unless ($point->trips->isEmpty())
        <ul>
            @foreach ($point->trips->all() as $trip)
                <li>{{ $trip->fullName() }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Nenhuma linha cadastrada.</p>
    @endunless
@stop