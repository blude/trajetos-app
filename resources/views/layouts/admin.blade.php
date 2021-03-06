<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trajetos</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-libs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    @include ('partials.navigation')
    <div class="container">
        @include ('partials.flash')
        @yield ('content')
    </div>
    <footer class="text-center" role="contentinfo">
        <p class="text-muted">Trajetos - Feito com &lt;3 em Vitória</p>
    </footer>
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.js') }}"></script>
    @yield ('scripts')
</body>
</html>