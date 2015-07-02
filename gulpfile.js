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

    mix.less('app.less', 'public/assets/css/app.css')
    .copy(bowerDir + 'normalize-css/normalize.css', 'public/assets/css/vendor/normalize.css')
    .copy(bowerDir + 'bootstrap/dist/css/bootstrap.css', 'public/assets/css/vendor/bootstrap.css');

    mix.less('admin.less', 'public/assets/css/admin.css');

    mix.styles([
        'vendor/normalize.css', 'app.css'
    ], 'public/assets/css/all.css', 'public/assets/css');

    mix.version('public/assets/css/all.css');  
});
