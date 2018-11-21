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

mix.styles([
        'resources/assets/css/style.css',
		'resources/assets/css/app/ui.css',
		'resources/assets/css/app/form.css',
		'resources/assets/css/app/table.css',
		'resources/assets/css/app/toolbar.css',
    ], 'public/css/app.min.css')
	 // Custom JS 
	.js([
    	'resources/assets/js/scripts.js',
	], 'public/js/scripts.min.js')

	// .js('resources/assets/js/scripts.js','public/js/scripts.js')

    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
