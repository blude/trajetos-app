@extends('layouts.admin')

@section('content')
    <h1>Criar Ponto</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'points']) !!}
        @include('points._form', ['submitButtonText' => 'Criar Ponto'])
    {!! Form::close() !!}

    <p><a href="{{ route('points.index') }}">&larr; Voltar</a></p>
@stop