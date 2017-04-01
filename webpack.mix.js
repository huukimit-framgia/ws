const { mix } = require('laravel-mix');

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

mix.sass('resources/assets/sass/admin/admin.style.scss', 'public/css')
    .sass('resources/assets/sass/app/app.style.scss', 'public/css')
    .js('resources/assets/js/admin/main.admin.js', 'public/js');

