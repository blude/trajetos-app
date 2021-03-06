@extends('layouts.admin')

@section('content')
    <h1>Editar Coordenada</h1>

    @include('errors._list')

    {!! Form::model($point, ['method' => 'PATCH', 'action' => ['PointsController@update', $point->id]]) !!}
        @include('points._form', ['submitButtonText' => 'Atualizar Ponto'])
    {!! Form::close() !!}
    <hr>
    {!! Form::open(['method' => 'DELETE', 'action' => ['PointsController@destroy', $point->id]]) !!}
        {!! Form::submit('Remover', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop