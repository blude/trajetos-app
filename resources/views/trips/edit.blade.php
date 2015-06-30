@extends('layouts.app')

@section('content')
    <h1>Editar: {{ $trip->route->number }} - {{ $trip->name }}</h1>

    @include('errors._list')

    {!! Form::model($trip, ['method' => 'PATCH', 'action' => ['TripsController@update', $trip->id]]) !!}
        @include('trips._form', ['submitButtonText' => 'Atualizar Viagem'])
    {!! Form::close() !!}

    {!! Form::model($trip, ['method' => 'DELETE', 'action' => ['TripsController@destroy', $trip->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'Btn Btn--danger']) !!}
    {!! Form::close() !!}

    <p><a href="/">&larr; Voltar</a></p>
@stop
