@extends ('layouts.admin')

@section ('content')

    <h1>Redefinir Senha</h1>

    @include ('errors._list')

    {!! Form::open(['method' => 'POST', 'action' => ['Auth\PasswordController@postReset'], 'class' => 'form-horizontal']) !!}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
            <div class="col-sm-6">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Senha</label>
            <div class="col-sm-6">
                <input class="form-control" type="password" name="password" id="password">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password_confirmation">Confirmar Senha</label>
            <div class="col-sm-6">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-primary" type="submit">Redefinir Senha</button>
            </div>
        </div>

    {!! Form::close() !!}

@stop