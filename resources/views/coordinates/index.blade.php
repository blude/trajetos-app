@extends('layouts.admin')

@section('content')
    <h1>Coordenadas <a class="btn btn-primary" href="{{ route('admin.coordinates.create') }}">Nova</a></h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th>ID</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Tipo</th>
                <th>Viagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @unless ($coordinates->isEmpty())
                @foreach($coordinates as $coordinate)
                    <tr>
                        <td>{{ $coordinate->id }}</td>
                        <td>{{ $coordinate->lat }}</td>
                        <td>{{ $coordinate->lon }}</td>
                        <td>{{ $coordinate->coordinate_type->name }}</td>
                        <td>
                            @foreach ($coordinate->trips as $trip)
                               <div>{{ $trip->fullName() }}</div>
                            @endforeach
                        </td>
                        <td>
                            {!! link_to_route('admin.coordinates.show', 'ver', $coordinate->id) !!} -
                            {!! link_to_route('admin.coordinates.edit', 'editar', $coordinate->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="6">Nenhum ponto cadastrado.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop