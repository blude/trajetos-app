@extends('layouts.admin')

@section('content')
    <h1>Nova Viagem</h1>

    @include('errors._list')

    {!! Form::open(['action' => 'TripsController@store']) !!}
        @include('trips._form', ['submitButtonText' => 'Criar Viagem'])
    {!! Form::close() !!}
@stop