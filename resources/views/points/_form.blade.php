<div class="form-group">
    {!! Form::label('trip_list', 'Viagem:') !!}
    {!! Form::select('trip_list[]', $trips, null, ['class' => 'form-control', 'multiple']) !!}
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
    {!! Form::select('point_type_id', $point_types, null, ['class' => 'form-control']) !!}
</div>

<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'Btn Btn--primary']) !!}
</div>
