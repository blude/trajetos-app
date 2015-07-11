@extends('layouts.admin')

@section('content')
    <h1>Nova Linha</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'routes']) !!}
        @include('routes._form', ['submitButtonText' => 'Criar Linha'])
    {!! Form::close() !!}
@stop