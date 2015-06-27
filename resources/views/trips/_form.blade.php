<div class="Form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'Form-control']) !!}
</div>
<div class="Form-group">
    {!! Form::label('route_id', 'Route ID:') !!}
    {!! Form::text('route_id', null, ['class' => 'Form-control']) !!}
</div>
<div class="Form-action">
    {!! Form::submit($submitButtonText, ['class' => 'Btn Btn--primary']) !!}
</div>