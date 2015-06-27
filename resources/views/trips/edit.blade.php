@extends('layouts.app')

@section('content')
    <h1>Editar: {{ $trip->route->number }} -  {{ $trip->name }}</h1>

    {!! Form::model($trip, ['method' => 'PATCH', 'action' => ['TripsController@update', $trip->id]]) !!}
        @include('trips._form', ['submitButtonText' => 'Atualizar Viagem'])
    {!! Form::close() !!}

    @include('errors._list')

    <p><a href="/">&larr; Voltar</a></p>
@stop