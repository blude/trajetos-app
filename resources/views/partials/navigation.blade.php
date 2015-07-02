<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="" aria-expanded="false">
                <div class="sr-only">Alternar navegação</div>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Trajetos</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('routes.index') }}">Linhas <span class="sr-only">(atual)</span></a></li>
                <li><a href="{{ route('trips.index') }}">Viagens <span class="sr-only">(atual)</span></a></li>
                <li><a href="{{ route('points.index') }}">Pontos <span class="sr-only">(atual)</span></a></li>
                <li><a href="{{ url('settings') }}">Configurações</a></li>
            </ul>
            @if (Auth::check())
                <div class="navbar-right">
                    <p class="navbar-text">Olá, {{ Auth::user()->name }}</p>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ action('Auth\AuthController@getLogout') }}" class="navbar-link">Sair</a></li>
                    </ul>
                </div>
            @else
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ action('Auth\AuthController@getLogin') }}" class="navbar-link">Entrar</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>