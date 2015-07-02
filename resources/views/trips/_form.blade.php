<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('route_id', 'Linha:') !!}
    {!! Form::select('route_id', $routes, null, ['class' => 'form-control']) !!}
</div>

<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
