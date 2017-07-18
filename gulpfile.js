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
    // Cvs styles
    mix.less([
        'cvs/homero.less'
    ], 'public/assets/cvs/homero.css');

    // Client site
    mix.copy('node_modules/sweetalert/dist/sweetalert.css', 'resources/assets/css/client/sweetalert.css')
        // .sass('app.scss')
        .styles([
            'client/bootstrap.min.css',
            'client/light-bootstrap-dashboard.css',
            'client/pe-icon-7-stroke.css'
            // 'client/sweetalert.css'
        ], 'public/assets/client/css')
        .webpack('app.js');

    // Landing page
    mix.copy('resources/assets/fonts/landing', 'public/assets/landing/fonts');
    mix.copy('resources/assets/images/landing', 'public/assets/landing/css/images')
    mix.sass([
        'landing/main.scss'
    ], 'public/assets/landing/css/main.css');
    mix.sass([
        'landing/ie8.scss'
    ], 'public/assets/landing/css/ie8.css');
    mix.styles([
        'landing/font-awesome.min.css'
    ], 'public/assets/landing/css/font-awesome.min.css');

    mix.scripts([
        'landing/jquery.min.js',
        'landing/jquery.dropotron.min.js',
        'landing/jquery.scrollgress.min.js',
        'landing/skel.min.js',
        'landing/util.js',
        'landing/main.js',
        'landing/custom.js',
        'landing/jquery.validate.min.js'
    ], 'public/assets/landing/js');
    mix.scripts([
        'landing/ie/respond.min.js'
    ], 'public/assets/landing/js/ie/respond.min.js');
    mix.scripts([
        'landing/ie/html5shiv.js'
    ], 'public/assets/landing/js/ie/html5shiv.js');
});
