@extends('layouts.admin')

@section('content')
    <h1>Novo Ponto</h1>

    @include('errors._list')

    {!! Form::open(['action' => 'PointsController@store']) !!}
        @include('points._form', ['submitButtonText' => 'Criar Ponto'])
    {!! Form::close() !!}
@stop