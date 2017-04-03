const {mix} = require('laravel-mix');

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

// Mix asset app:
mix.sass('resources/assets/sass/app/app.style.scss', 'public/css/app')

// Mix asset admin:
    .sass('resources/assets/sass/admin/admin.style.scss', 'public/css/admin')
    .js('resources/assets/js/admin/main.admin.js', 'public/js/admin');

