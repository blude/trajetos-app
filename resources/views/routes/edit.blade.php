@extends('layouts.app')

@section('content')
    <h1>Editar: {{ $route->fullName() }}</h1>

    @include('errors._list')

    {!! Form::model($route, ['method' => 'PATCH', 'action' => ['RoutesController@update', $route->id]]) !!}
        @include('routes._form', ['submitButtonText' => 'Atualizar Linha'])
    {!! Form::close() !!}

    {!! Form::model($route, ['method' => 'DELETE', 'action' => ['RoutesController@destroy', $route->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'Btn Btn--danger']) !!}
    {!! Form::close() !!}

    <p><a href="/">&larr; Voltar</a></p>
@stop
