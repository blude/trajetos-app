<div class="form-group">
    {!! Form::label('number', 'Número:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Endereço:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('reference', 'Referência:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>  

<div class="form-group">
    {!! Form::label('neighborhood_id', 'Bairro:') !!}
    {!! Form::select('neighborhood_id', $neighborhoods, null, ['class' => 'form-control', 'id' => 'neighborhood_list']) !!}
</div>

<div class="form-group">
    {!! Form::label('point_id', 'Ponto:') !!}
    {!! Form::select('point_id', $points, null, ['class' => 'form-control']) !!}
</div>

<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>

@section ('scripts')
<script src="{{ asset('assets/js/vendor/select2.pt-BR.js') }}"></script>
<script>
    $('#neighborhood_list').select2({
        placeholder: 'Selecione um bairro',
    });
</script>
@stop
    