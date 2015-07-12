@extends('layouts.admin')

@section('content')
    <h1>Nova Parada</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'bus_stops']) !!}
        @include('bus_stops._form', ['submitButtonText' => 'Criar Parada'])
    {!! Form::close() !!}
@stop