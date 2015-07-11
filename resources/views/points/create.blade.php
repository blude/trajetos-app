@extends('layouts.admin')

@section('content')
    <h1>Novo Ponto</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'points']) !!}
        @include('points._form', ['submitButtonText' => 'Criar Ponto'])
    {!! Form::close() !!}
@stop