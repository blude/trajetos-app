@extends('layouts.admin-sidebar')

@section('content')
    <h1>Coordenada <small>#{{ $coordinate->id }}</small></h1>
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
            <tr>
                <td>{{ $coordinate->id }}</td>
                <td>{{ $coordinate->lat }}</td>
                <td>{{ $coordinate->lon }}</td>
                <td>{{ $coordinate->point_type->label }}</td>
                <td>
                    {!! link_to_route('admin.coordinate.show', 'ver', $coordinate->id) !!} - 
                    {!! link_to_route('admin.coordinate.edit', 'editar', $coordinate->id) !!}
                </td>
            </tr>
        </tbody>
    </table>
@stop

@section ('sidebar')
    <h2>Linhas</h2>
    @unless ($coordinate->trips->isEmpty())
        <ul>
            @foreach ($coordinate->trips->all() as $trip)
                <li>{{ $trip->fullName() }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Nenhuma linha cadastrada.</p>
    @endunless
@stop