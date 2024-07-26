const mix = require('laravel-mix');

mix.ts('resources/js/debt-form.ts', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .setPublicPath('public');
