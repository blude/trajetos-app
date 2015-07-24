@extends('layouts.admin')

@section('content')
    <h1>Viagem <small>{{ $trip->fullName() }}</small></h1>
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
            @unless ($trip->coordinates->isEmpty())
                @foreach($trip->coordinates as $point)
                    <tr>
                        <td>{{ $coordinate->id }}</td>
                        <td>{{ $coordinate->lat }}</td>
                        <td>{{ $coordinate->lon }}</td>
                        <td>{{ $coordinate->coordinate_type->label }}</td>
                        <td>{!! link_to_route('admin.coordinates.show', 'ver', $coordinate->id) !!} - {!! link_to_route('admin.coordinates.edit', 'editar', $coordinate->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="5">Nenhuma coordenada cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop