@extends('layouts.app')

@section('content')
    <h1>Editar: {{ $route->number }} -  {{ $route->name }}</h1>

    {!! Form::model($route, ['method' => 'PATCH', 'action' => ['RoutesController@update', $route->id]]) !!}
        @include('routes._form', ['submitButtonText' => 'Atualizar Linha'])
    {!! Form::close() !!}

    @include('errors._list')

    <p><a href="/">&larr; Voltar</a></p>
@stop