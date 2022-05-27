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
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/clients/home.js', 'public/js/clients');
mix.js('resources/js/admin/product/index.js', 'public/js/admin/product');
mix.js('resources/js/admin/product/create.js', 'public/js/admin/product');
mix.js('resources/js/admin/order/create.js', 'public/js/admin/order');
mix.js('resources/js/admin/product/product.js', 'public/js/admin/product');

mix.js('resources/js/admin/blog/index.js', 'public/js/admin/blog');
mix.js('resources/js/admin/blog/create.js', 'public/js/admin/blog');
mix.js('resources/js/admin/blog/blog.js', 'public/js/admin/blog');
