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
require('laravel-elixir-imagemin');
elixir.config.sourcemaps = false;

elixir(function(mix) {
  mix.sass([
        'app.scss'
      ],'www/assets/css')
    .imagemin('','www/assets/img')
    .scripts([
        '../vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'assets/js/app.js'
      ],'www/assets/js/app.js','resources')
    .copy('vendor/bower_components/jquery/dist/jquery.min.js','www/assets/js/vendors')
    .copy('vendor/bower_components/font-awesome/fonts','www/assets/fonts')
});
