const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/action.js', 'public/js');

// mix.js('resources/js/imagesloaded.pkgd.min.js', 'public/js');
//
// mix.js('resources/js/main.js', 'public/js');
//
// mix.js('resources/js/bootstrap.js', 'public/js');
//
// mix.js('resources/js/jquery.countdown.min.js', 'public/js');
//
// mix.js('resources/js/jquery.dd.min.js', 'public/js');
//
// mix.js('resources/js/jquery.nice-select.min.js', 'public/js');
//
// mix.js('resources/js/jquery.slicknav.js', 'public/js');
//
// mix.js('resources/js/jquery.zoom.min.js', 'public/js');
//
// mix.js('resources/js/jquery-3.3.1.min.js', 'public/js');
//
// mix.js('resources/js/jquery-ui.min.js', 'public/js');
//
// mix.js('resources/js/owl.carousel.min.js', 'public/js');
