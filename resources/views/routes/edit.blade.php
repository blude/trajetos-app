@extends('layouts.admin')

@section('content')
    <h1>Editar Linha</h1>

    @include('errors._list')

    {!! Form::model($route, ['method' => 'PATCH', 'action' => ['RoutesController@update', $route->id]]) !!}
        @include('routes._form', ['submitButtonText' => 'Atualizar Linha'])
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['RoutesController@destroy', $route->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    <p><a href="{{ route('routes.index') }}">&larr; Voltar</a></p>
@stop
