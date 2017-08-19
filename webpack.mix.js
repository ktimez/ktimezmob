let mix = require('laravel-mix');

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

mix.js(['resources/assets/js/jquery.js','resources/assets/js/bootstrap.min.js','resources/assets/js/menu.js'],'public/js/all.js')
   .styles(['resources/assets/css/bootstrap.min.css','resources/assets/css/menu.css','resources/assets/css/mobile.css'], 'public/css/all.css')
   .version();
