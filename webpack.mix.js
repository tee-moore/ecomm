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

// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery/jquery.min.js', 'public/js/plugins/jquery.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.min.js', 'public/js/plugins/bootstrap.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.min.js', 'public/js/plugins/bootstrap-select.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-slimscroll/jquery.slimscroll.js', 'public/js/plugins/jquery.slimscroll.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/node-waves/waves.min.js', 'public/js/plugins/waves.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-countto/jquery.countTo.js', 'public/js/plugins/jquery.countTo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/raphael/raphael.min.js', 'public/js/plugins/raphael.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/morrisjs/morris.min.js', 'public/js/plugins/morris.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/chartjs/Chart.bundle.min.js', 'public/js/plugins/Chart.bundle.min.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/flot-charts/jquery.flot.js', 'public/js/plugins/jquery.flot.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/flot-charts/jquery.flot.resize.js', 'public/js/plugins/jquery.flot.resize.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/flot-charts/jquery.flot.pie.js', 'public/js/plugins/jquery.flot.pie.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/flot-charts/jquery.flot.categories.js', 'public/js/plugins/jquery.flot.categories.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/flot-charts/jquery.flot.time.js', 'public/js/plugins/jquery.flot.time.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-sparkline/jquery.sparkline.js', 'public/js/plugins/jquery.sparkline.js');
//
// mix.copy('node_modules/adminbsb-materialdesign/js/helpers.js', 'public/js/admin/helpers.js');
// mix.copy('node_modules/adminbsb-materialdesign/js/admin.js', 'public/js/admin/admin.js');
// mix.copy('node_modules/adminbsb-materialdesign/js/demo.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/js/pages/tables/jquery-datatable.js', 'public/js/admin/jquery-datatable.js');
//
//     <!-- Jquery DataTable Plugin Js -->
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js', 'public/js/admin/demo.js');
// mix.copy('node_modules/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js', 'public/js/admin/demo.js');










// mix.babel([
//     'node_modules/adminbsb-materialdesign/js/helpers.js',
//     'node_modules/adminbsb-materialdesign/js/admin.js',
//     'node_modules/adminbsb-materialdesign/js/demo.js',
// ], 'public/js/admin/script.js');

mix.sass('resources/sass/admin/admin.scss', 'public/css')
    .options({
        processCssUrls: false
    });

// mix.js('resources/js/admin/vendor.js', 'public/js/admin');
