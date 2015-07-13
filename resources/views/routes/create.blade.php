@extends('layouts.admin')

@section('content')
    <h1>Nova Linha</h1>

    @include('errors._list')

    {!! Form::open(['action' => 'RoutesController@store']) !!}
        @include('routes._form', ['submitButtonText' => 'Criar Linha'])
    {!! Form::close() !!}
@stop