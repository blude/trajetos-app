@extends('layouts.admin')

@section('content')
    <h1>Editar Viagem</h1>

    @include('errors._list')

    {!! Form::model($trip, ['method' => 'PATCH', 'action' => ['TripsController@update', $trip->id]]) !!}
        @include('trips._form', ['submitButtonText' => 'Atualizar Viagem'])
    {!! Form::close() !!}
@stop
