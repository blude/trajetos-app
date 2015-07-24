@extends('layouts.admin')

@section('content')
    <h1>Nova Coordenada</h1>

    @include('errors._list')

    {!! Form::open(['action' => 'CoordinatesController@store']) !!}
        @include('coordinates._form', ['submitButtonText' => 'Criar Coordenada'])
    {!! Form::close() !!}
@stop