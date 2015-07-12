@extends('layouts.admin')

@section('content')
    <h1>Paradas <a class="btn btn-primary" href="{{ route('bus_stops.create') }}">Nova</a></h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th>ID</th>
                <th>Número</th>
                <th>Endereço</th>
                <th>Referência</th>
                <th>Bairro</th>
                <th>Ponto #</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @unless ($bus_stops->isEmpty())
                @foreach($bus_stops as $bus_stop)
                    <tr>
                        <td>{{ $bus_stop->id }}</td>
                        <td>{{ $bus_stop->number }}</td>
                        <td>{{ $bus_stop->address }}</td>
                        <td>{{ $bus_stop->reference }}</td>
                        <td>{{ $bus_stop->neighborhood->name }}</td>
                        <td>{{ $bus_stop->point->id }}</td>
                        <td>{!! link_to_route('bus_stops.show', 'ver', $bus_stop->id) !!} - {!! link_to_route('bus_stops.edit', 'editar', $bus_stop->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="7">Nenhuma parada de ônibus cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop