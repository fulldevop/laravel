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

mix
    .setPublicPath('public/build')
    .setResourceRoot('build')// понимает, где находится,
    // что не просто в public - нужно при дальнейшей установке например шрифтов и пр.
    .js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .version();// чтобы использовалась актуальная сборка, добавляет id к файлам css и js
