const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');


mix
    .sass('./assets/src/theme-style.scss', './assets/css/style.css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js')
        ]
    });