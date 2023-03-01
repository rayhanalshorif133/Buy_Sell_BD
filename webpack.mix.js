const mix = require("laravel-mix");

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
mix.browserSync("http://localhost:8000");

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/home.js", "public/js/home.js")
    .js("resources/js//admin/slider.js", "public/js/admin/slider.js")
    .sass("resources/sass/custom.scss", "public/css")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();
