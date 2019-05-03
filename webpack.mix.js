const mix = require('laravel-mix')

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



// mix.babel([
//     'node_modules/adminbsb-materialdesign/js/helpers.js',
//     'node_modules/adminbsb-materialdesign/js/admin.js',
//     'node_modules/adminbsb-materialdesign/js/demo.js',
// ], 'public/js/admin/script.js');

mix.sass('resources/sass/bootstrap.scss', 'public/css/')
    .sass('resources/sass/app.scss', 'public/css/')
    .sass('resources/sass/admin/admin.scss', 'public/css/');

mix.js('resources/js/app.js', 'public/js/')
    .js('resources/js/admin/admin.js', 'public/js/');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
