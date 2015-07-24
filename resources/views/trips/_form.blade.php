<div class="form-group">
    {!! Form::label('name', 'Sentido:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('route_id', 'Linha:') !!}
    {!! Form::select('route_id', $routes, null, ['class' => 'form-control', 'id' => 'route_id']) !!}
</div>

<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>

@section ('scripts')
<script src="{{ asset('assets/js/vendor/select2.pt-BR.js') }}"></script>
<script>
    $('#route_id').select2({
        placeholder: 'Selecione uma linha'
    });
</script>
@stop