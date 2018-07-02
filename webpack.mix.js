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
mix.babel('resources/assets/css/adminlte.css','public/assets/css/adminlte.css');
mix.babel('resources/assets/css/adminlte.css.map','public/assets/css/adminlte.css.map');
mix.babel('resources/assets/css/adminlte.min.css','public/assets/css/adminlte.min.css');
mix.babel('resources/assets/css/dataTables.bootstrap4.css','public/assets/css/dataTables.bootstrap4.css');

mix.babel('resources/assets/js/adminlte.js','public/assets/js/adminlte.js');
mix.babel('resources/assets/js/adminlte.js.map','public/assets/js/adminlte.js.map');
mix.babel('resources/assets/js/adminlte.min.js','public/assets/js/adminlte.min.js');
mix.babel('resources/assets/js/adminlte.min.js.map','public/assets/js/adminlte.min.js.map');
mix.babel('resources/assets/js/demo.js','public/assets/js/demo.js');


mix.babel('resources/assets/js/jquery.min.js','public/assets/js/jquery.min.js');
mix.babel('resources/assets/js/bootstrap.bundle.min.js','public/assets/js/bootstrap.bundle.min.js');
mix.babel('resources/assets/js/jquery.dataTables.js','public/assets/js/jquery.dataTables.js');
mix.babel('resources/assets/js/dataTables.bootstrap4.js','public/assets/js/dataTables.bootstrap4.js');
mix.babel('resources/assets/js/jquery.slimscroll.min.js','public/assets/js/jquery.slimscroll.min.js');
mix.babel('resources/assets/js/fastclick.js','public/assets/js/fastclick.js');


// mix.babel('resources/assets/images/avar.JPG','public/assets/images/avar.JPG');

if(mix.inProduction()){
	mix.version();
}
