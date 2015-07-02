<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('number', 'Número:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-action">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>