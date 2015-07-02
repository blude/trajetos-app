@extends('layouts.admin')

@section('content')
    <h1>Pontos</h1>
    @unless ($points->isEmpty())
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
                @foreach($points as $point)
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
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-muted">Nenhum ponto cadastrado.</p>
    @endunless
    <ul>
        <li><a href="{{ route('points.create') }}">Criar Ponto</a></li>
        <li><a href="{{ action('PagesController@home') }}">&larr; Voltar</a></li>
    </ul>
@stop