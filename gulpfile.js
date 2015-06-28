var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var bowerDir = 'vendor/bower_components/';

elixir(function(mix) {

    mix.less('app.less')
    .copy(bowerDir + 'normalize-css/normalize.css', 'public/css/vendor/normalize.css')
    .copy(bowerDir + 'bootstrap/dist/css/bootstrap.css', 'public/css/vendor/bootstrap.css');

    mix.styles([
        'vendor/normalize.css', 'app.css'
    ], null, 'public/css');

    mix.version('public/css/all.css');  
});
