<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trajetos</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <div class="container">
        @include('partials.flash')
        @yield('content')
    </div>
</body>
</html>