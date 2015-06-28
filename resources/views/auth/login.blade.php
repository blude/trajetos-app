@extends ('layouts.admin')

@section ('content')

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h1 class="panel-title">Entrar</h1>
                </div>

                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-sm-12">
                            @include ('errors._list')
                        </div>
                    </div>

                    <form class="form-horizontal" method="POST" action="/auth/login">

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="password">Senha</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-7">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Lembrar de mim
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-7">
                                <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                            </div>
                        </div>

                    </form>

                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-7">
                            <a class="btn btn-link btn-block" href="{{ url('password/email') }}">Esqueceu a senha?</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-7">
                            <hr>
                            <p><a class="btn btn-default btn-block" href="{{ url('auth/register') }}">Cadastrar</a></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@stop
