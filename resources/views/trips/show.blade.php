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
            @unless ($trip->points->isEmpty())
                @foreach($trip->points as $point)
                    <tr data-point-id="{{ $point->id }}">
                        <td>{{ $point->id }}</td>
                        <td>{{ $point->lat }}</td>
                        <td>{{ $point->lon }}</td>
                        <td>{{ $point->point_type->label }}</td>
                        <td>{!! link_to_route('admin.points.show', 'ver', $point->id) !!} - {!! link_to_route('admin.points.edit', 'editar', $point->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="5">Nenhum ponto cadastrado.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop