@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Linha</h1>

    {!! Form::open(['url' => 'routes']) !!}
        @include('routes._form', ['submitButtonText' => 'Criar Linha'])
    {!! Form::close() !!}

    @include('errors._list')

    <p><a href="/">&larr; Voltar</a></p>
@stop