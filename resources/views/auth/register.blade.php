@extends ('layouts.admin-full')

@section ('content')

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            <h1>Cadastrar</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-6">
            @include ('errors._list')
        </div>
    </div>
    
    <form class="form-horizontal" method="POST" action="/auth/register">
        
        {!! csrf_field() !!}

        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Nome</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="email">Email</label>
            <div class="col-sm-6">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="password">Senha</label>
            <div class="col-sm-3">
                <input class="form-control" type="password" name="password" id="password">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="password_confirmation">Confirmar Senha</label>
            <div class="col-sm-3">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>

    </form>

@stop
