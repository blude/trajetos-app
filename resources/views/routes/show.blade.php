@extends('layouts.admin')

@section('content')
    <h1>Linha <small>{{ $route->fullName() }}</small></h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Viagem</th>
            </tr>
        </thead>
        <tbody>
            @unless ($route->trips->isEmpty())
                @foreach ($route->trips->all() as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{!! link_to_route('admin.trips.show', $trip->fullName(), $trip->id) !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center text-muted" colspan="2">Nenhuma linha cadastrada.</td>
                </tr>
            @endunless
        </tbody>
    </table>
@stop