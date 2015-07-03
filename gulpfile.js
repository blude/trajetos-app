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

    mix
    .less('app.less', 'public/assets/css/app.css')
    .less('admin.less', 'public/assets/css/admin.css');

    mix
    .copy(bowerDir + 'normalize-css/normalize.css', 'public/assets/css/vendor/normalize.css')
    .copy(bowerDir + 'bootstrap/dist/css/bootstrap.css', 'public/assets/css/vendor/bootstrap.css')
    .copy(bowerDir + 'select2/dist/css/select2.css', 'public/assets/css/vendor/select2.css');

    mix
    .copy(bowerDir + 'jquery/dist/jquery.js', 'public/assets/js/vendor/jquery.js')
    .copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'public/assets/js/vendor/bootstrap.js');

    mix
    .copy(bowerDir + 'select2/dist/js/select2.js', 'public/assets/js/vendor/select2.js')
    .copy(bowerDir + 'select2/dist/js/i18n/pt-BR.js', 'public/assets/js/vendor/pt-BR.js');

    mix
    .styles([
        'vendor/normalize.css', 'app.css'
    ], 'public/assets/css/all.css', 'public/assets/css');

    mix
    .styles([
        'vendor/select2.css', 'vendor/bootstrap.css'
    ], 'public/assets/css/admin-libs.css', 'public/assets/css');

    mix
    .scripts([
        'vendor/select2.js', 'vendor/pt-BR.js'
    ], 'public/assets/js/vendor/select2.pt-BR.js', 'public/assets/js');

});
