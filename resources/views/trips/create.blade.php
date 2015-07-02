@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Viagem</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'trips']) !!}
        @include('trips._form', ['submitButtonText' => 'Criar Viagem'])
    {!! Form::close() !!}

    <p><a href="/points">&larr; Voltar</a></p>
@stop