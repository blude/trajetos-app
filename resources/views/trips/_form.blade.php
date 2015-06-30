@inject ('routes', 'App\Route')

<div class="Form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'Form-control']) !!}
</div>

<div class="Form-group">
    {!! Form::label('route_id', 'Linha:') !!}
    <select class="form-control" name="route_id" id="route_id">
        @foreach ($routes->all() as $route)
            <option value="{{ $route->id }}">{{ $route->number }} - {{ $route->name }}</option>
        @endforeach
    </select>
</div>

<div class="Form-action">
    {!! Form::submit($submitButtonText, ['class' => 'Btn Btn--primary']) !!}
</div>