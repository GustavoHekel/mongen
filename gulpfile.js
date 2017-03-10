var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // Client site
    mix.copy('node_modules/sweetalert/dist/sweetalert.css', 'resources/assets/css/client/sweetalert.css')
        .sass('app.scss')
        .styles([
            'client/bootstrap.min.css',
            'client/light-bootstrap-dashboard.css',
            'client/pre-icon-7-stroke.css',
            // 'client/sweetalert.css'
        ], 'public/assets/client/css')
        .webpack('app.js');

    // Landing page
    mix.scripts([
        'landing/jquery.min.js',
        'landing/jquery.dropotron.min.js',
        'landing/jquery.scrollgress.min.js',
        'landing/skel.min.js',
        'landing/util.js',
        'landing/main.js',
        'landing/custom.js'
    ], 'public/assets/landing/js');
    mix.scripts([
        'landing/ie/respond.min.js'
    ], 'public/assets/landing/js/ie/respond.min.js');
    mix.scripts([
        'landing/ie/html5shiv.js'
    ], 'public/assets/landing/js/ie/html5shiv.js')

    mix.browserSync();
});
