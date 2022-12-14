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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps().styles([
        'resources/views/home/style/mobile.css',
    ],'public/css/mobile.css', 'public/css/tablet.css').styles([
        'resources/views/home/style/tablet.css',
    ], 'public/css/tablet.css').styles([
        'resources/views/home/style/desktop.css',
    ], 'public/css/desktop.css').styles([
        'resources/views/catalogos/catalogos.css',
    ], 'public/css/catalogos.css');;
    