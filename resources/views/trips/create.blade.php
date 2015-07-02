@extends('layouts.admin')

@section('content')
    <h1>Criar Viagem</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'trips']) !!}
        @include('trips._form', ['submitButtonText' => 'Criar Viagem'])
    {!! Form::close() !!}

    <p><a href="/points">&larr; Voltar</a></p>
@stop