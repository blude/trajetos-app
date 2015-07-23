<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#trajetos-nav" aria-expanded="false" aria-controls="trajetos-nav">
                <span class="sr-only">Alternar navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Trajetos</a>
        </div>
        <div class="collapse navbar-collapse" id="trajetos-nav">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin.routes.index') }}">Linhas</a></li>
                <li><a href="{{ route('admin.trips.index') }}">Viagens</a></li>
                <li><a href="{{ route('admin.coordinates.index') }}">Coordenadas</a></li>
                <li><a href="{{ route('admin.bus_stops.index') }}">Paradas</a></li>
                <li><a href="{{ url('settings') }}">Configurações</a></li>
            </ul>
            @if (auth()->check())
                <div class="navbar-right">
                    <p class="navbar-text">Olá, {{ auth()->user()->name }}</p>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ action('Auth\AuthController@getLogout') }}" class="navbar-link">Sair</a></li>
                    </ul>
                </div>
            @else
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ action('Auth\AuthController@getLogin') }}" class="navbar-link">Entrar</a></li>
                        <li><a href="{{ action('Auth\AuthController@getRegister') }}" class="navbar-link">Cadastrar</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>