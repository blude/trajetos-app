<div class="form-group">
    {!! Form::label('trip_list', 'Viagem(s):') !!}
    {!! Form::select('trip_list[]', $trips, null, ['class' => 'form-control', 'id' => 'trip_list', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('lat', 'Latitude:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lon', 'Longitude:') !!}
    {!! Form::text('lon', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('point_type_id', 'Tipo:') !!}
    {!! Form::select('point_type_id', $point_types, null, ['class' => 'form-control', 'id' => 'point_type_id']) !!}
</div>

<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>

@section ('scripts')
<script src="{{ asset('assets/js/vendor/select2.pt-BR.js') }}"></script>
<script>
    $('#trip_list').select2({
        placeholder: 'Selecione uma linha',
        theme: 'classic'
    });
    $('#point_type_id').select2({
        placeholder: 'Selecione o tipo do ponto',
        theme: 'classic',
        tags: true
    });
</script>
@stop