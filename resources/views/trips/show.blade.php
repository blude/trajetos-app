@extends('layouts.app')

@section('content')
    <p><a href="/">&larr; Voltar</a></p>
    <h1>{{ $trip->fullName() }}</h1>
@stop