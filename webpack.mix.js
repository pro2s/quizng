const mix = require('laravel-mix');
require('laravel-mix-bundle-analyzer');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

if (!mix.inProduction()) {
    mix.bundleAnalyzer({
        analyzerMode: 'static',
    });
}