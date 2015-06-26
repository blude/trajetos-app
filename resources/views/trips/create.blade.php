@extends('layouts.app')

@section('main')
    <h1>Adicionar Nova Viagem</h1>

    {!! Form::open(['url' => 'trips']) !!}
        <div class="Form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class' => 'Form-control']) !!}
        </div>
        <div class="Form-group">
            {!! Form::label('route_id', 'Route ID:') !!}
            {!! Form::text('route_id', null, ['class' => 'Form-control']) !!}
        </div>
        <div class="Form-action">
            {!! Form::submit('Salvar Viagem', ['class' => 'Btn Btn--primary']) !!}
        </div>
    {!! Form::close() !!}
    <p><a href="/">&larr; Voltar</a></p>
@stop