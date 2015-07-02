@extends('layouts.app')

@section('content')
    <h1>Editar Ponto</h1>

    @include('errors._list')

    {!! Form::model($point, ['method' => 'PATCH', 'action' => ['PointsController@update', $point->id]]) !!}
        @include('points._form', ['submitButtonText' => 'Atualizar Ponto'])
    {!! Form::close() !!}

    {!! Form::model($point, ['method' => 'DELETE', 'action' => ['PointsController@destroy', $point->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'Btn Btn--danger']) !!}
    {!! Form::close() !!}

    <p><a href="/points">&larr; Voltar</a></p>
@stop