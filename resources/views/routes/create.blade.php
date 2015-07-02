@extends('layouts.admin')

@section('content')
    <h1>Criar Linha</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'routes']) !!}
        @include('routes._form', ['submitButtonText' => 'Criar Linha'])
    {!! Form::close() !!}

    <p><a href="{{ route('routes.index') }}">&larr; Voltar</a></p>
@stop