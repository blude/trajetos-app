@extends ('layouts.admin')

@section ('content')

    <div class="row">

        <div class="col-sm-4 col-sm-offset-4">

            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h1 class="panel-title">Entrar</h1>
                </div>

                <div class="panel-body">
                    
                    @include ('errors._list')

                    {!! Form::open(['method' => 'POST', 'action' => ['Auth\AuthController@postLogin']]) !!}

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'sr-only']) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Senha', ['class' => 'sr-only']) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remeber', null) !!} Lembrar de mim
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::submit('Entrar', ['class' => 'btn btn-primary btn-block btn-lg']) !!}
                        </div>

                    {!! Form::close() !!}

                    <a class="btn btn-link btn-block" href="{{ action('Auth\PasswordController@getEmail') }}">Esqueceu a senha?</a>
                    <hr>
                    <a class="btn btn-default btn-block" href="{{ action('Auth\AuthController@getRegister') }}">Cadastrar</a>

                </div>

            </div>

        </div>

    </div>

@stop
