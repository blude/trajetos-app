@extends('layouts.admin')

@section('content')
    <h1>Editar Parada</h1>

    @include('errors._list')

    {!! Form::model($bus_stop, ['method' => 'PATCH', 'action' => ['BusStopsController@update', $bus_stop->id]]) !!}
        @include('bus_stops._form', ['submitButtonText' => 'Atualizar Parada'])
    {!! Form::close() !!}
    <hr>
    {!! Form::open(['method' => 'DELETE', 'action' => ['BusStopsController@destroy', $bus_stop->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop