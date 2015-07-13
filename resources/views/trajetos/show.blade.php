@extends("layouts.app")

@section('content')
    <h1>{{ $trip->fullName() }}</h1>

    @unless ($trip->points->isEmpty())
        <div>
            @foreach ($trip->points as $point)
                <dl data-coords="{{ $point->lat }},{{ $point->lon }}">
                    <dt>Número:</dt>
                    <dd>{{ $point->bus_stop['number'] }}</dd>
                    <dt>Endereço</dt>
                    <dd>{{ $point->bus_stop['address'] }}</dd>
                    <dt>Referência</dt>
                    <dd>{{ $point->bus_stop['reference'] }}</dd>
                    <dt>Bairro</dt>
                    <dd>{{ $point->bus_stop['neighborhood']['name'] }}</dd>
                </dl>
                <hr>
            @endforeach
        </div>
    @else
        <p>Nenhuma ponto cadastrado.</p>
    @endunless
@stop
