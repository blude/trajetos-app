@extends ('layouts.admin')

@section ('content')

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            <h1>Entrar</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            @include ('errors._list')
        </div>
    </div>

    <form class="form-horizontal" method="POST" action="/auth/login">

        {!! csrf_field() !!}

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
            <div class="col-sm-6">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Senha</label>
            <div class="col-sm-6">
                <input class="form-control" type="password" name="password" id="password" placeholder="Senha">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Lembrar de mim
                    </label>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-primary" type="submit">Entrar</button>
                <a class="btn btn-link" href="{{ url('password/email') }}">Esqueci a senha</a>
            </div>
        </div>

    </form>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            <hr>
            <h3>Novo usuário?</h3>
            <p><a class="btn btn-default" href="{{ url('auth/register') }}">Cadastrar</a></p>
        </div>
    </div>

@stop
