@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Viagem</h1>

    {!! Form::open(['url' => 'trips']) !!}
        @include('trips._form', ['submitButtonText' => 'Adicionar Viagem'])
    {!! Form::close() !!}

    @include('errors._list')

    <p><a href="/">&larr; Voltar</a></p>
@stop