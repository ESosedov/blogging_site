const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/select2/css/select2.min.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
    'resources/assets/admin/css/adminlte.min.css',

], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js'

], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');


// mix.copyDirectory('resources/assets/front/css/images', 'public/assets/front/css/images');
// mix.copyDirectory('resources/assets/front/images', 'public/assets/front/images');
// mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');

mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/jquery.bxslider.css',
    'resources/assets/front/css/style.css',
], 'public/assets/front/css/front.css',).sourceMaps();

// mix.copy('resources/assets/front/css/bootstrap-theme.css.map', 'public/assets/front/css/bootstrap-theme.css.map')
// mix.copy('resources/assets/front/css/bootstrap.css.map', 'public/assets/front/css/bootstrap.css.map')

mix.js([
    'resources/assets/front/js/jquery.bxslider.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/mooz.scripts.min.js'


], 'public/assets/front/js/front.js').sourceMaps();


mix.styles([
    'resources/assets/front/elen/css/open-iconic-bootstrap.min.css',
    'resources/assets/front/elen/css/animate.css',
    'resources/assets/front/elen/css/owl.carousel.min.css',
    'resources/assets/front/elen/css/owl.theme.default.min.css',
    'resources/assets/front/elen/css/magnific-popup.css',
    'resources/assets/front/elen/css/aos.css',
    'resources/assets/front/elen/css/ionicons.min.css',
    'resources/assets/front/elen/css/bootstrap-datepicker.css',
    'resources/assets/front/elen/css/jquery.timepicker.css',
    'resources/assets/front/elen/css/flaticon.css',
    'resources/assets/front/elen/css/icomoon.css',
    'resources/assets/front/elen/css/style.css'

], 'public/assets/front/elen/css/front.css').sourceMaps();

mix.scripts([
    'resources/assets/front/elen/js/jquery.min.js',
    'resources/assets/front/elen/js/jquery-migrate-3.0.1.min.js',
    'resources/assets/front/elen/js/popper.min.js',
    'resources/assets/front/elen/js/bootstrap.min.js',
    'resources/assets/front/elen/js/jquery.easing.1.3.js',
    'resources/assets/front/elen/js/jquery.waypoints.min.js',
    'resources/assets/front/elen/js/jquery.stellar.min.js',
    'resources/assets/front/elen/js/owl.carousel.min.js',
    'resources/assets/front/elen/js/jquery.magnific-popup.min.js',
    'resources/assets/front/elen/js/aos.js',
    'resources/assets/front/elen/js/jquery.animateNumber.min.js',
    'resources/assets/front/elen/js/bootstrap-datepicker.js',
    'resources/assets/front/elen/js/scrollax.min.js',
    'resources/assets/front/elen/js/main.js'


], 'public/assets/front/elen/js/front.js').sourceMaps();

mix.copyDirectory('resources/assets/front/elen/fonts', 'public/assets/front/elen/fonts');
mix.copyDirectory('resources/assets/front/elen/images', 'public/assets/front/elen/images');
