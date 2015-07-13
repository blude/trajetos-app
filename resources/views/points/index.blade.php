@extends('layouts.admin')

@section('content')
    <h1>Pontos <a class="btn btn-primary" href="{{ route('points.create') }}">Novo</a></h1>
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
            @unless ($points->isEmpty())
                @foreach($points as $point)
                    <tr data-point-id="{{ $point->id }}">
                        <td>{{ $point->id }}</td>
                        <td>{{ $point->lat }}</td>
                        <td>{{ $point->lon }}</td>
                        <td>{{ $point->point_type->label }}</td>
                        <td>
                            @foreach ($point->trips as $trip)
                               <div>{{ $trip->fullName() }}</div>
                            @endforeach
                        </td>
                        <td>{!! link_to_route('points.show', 'ver', $point->id) !!} - {!! link_to_route('points.edit', 'editar', $point->id) !!}</td>
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