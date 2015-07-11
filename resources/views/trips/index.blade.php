@extends('layouts.admin')

@section('content')
    <h1>Viagens <a class="btn btn-primary" href="{{ route('trips.create') }}">Nova</a></h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th>ID</th>
                <th>Viagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @unless ($trips->isEmpty())
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{!! link_to_route('trips.show', $trip->fullName(), $trip->id) !!}</td>
                        <td>{!! link_to_route('trips.edit', 'editar', $trip->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="3">Nenhuma linha cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop