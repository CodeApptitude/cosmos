const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('mix-tailwindcss');

mix.sass('./assets/src/theme-style.scss', './assets/css/style.css')
    .tailwind('./tailwind.config.js');