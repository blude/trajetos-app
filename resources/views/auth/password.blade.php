@extends ('layouts.admin')

@section ('content')

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            <h1>Esqueci a senha</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            @include ('errors._list')
        </div>
    </div>

    {!! Form::open(['method' => 'POST', 'action' => ['Auth\PasswordController@postEmail'], 'class' => 'form-horizontal']) !!}

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
            <div class="col-sm-6">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email" placeholder="nome@exemplo.com.br">
            </div>
            <div class="col-sm-offset-2 col-sm-6">
                <p class="help-block" id="emailHelpBlock">Digite o endereço de email cadastrado para o qual será enviado uma mensagem contendo um link para redefinir a sua senha.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-primary" type="submit">Enviar Link para Redefinir Senha</button>
            </div>
        </div>

    {!! Form::close() !!}

@stop
