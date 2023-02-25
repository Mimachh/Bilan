const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './src/**/*.{html,js}', 
        './node_modules/tw-elements/dist/js/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                tommyoutline: ['MADE TOMMY Outline', 'sans-serif'],
                tommy: ['MADE TOMMY', 'sans-serif'],
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                jafardose: ['Miss Fajardose', 'cursive']
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('tw-elements/dist/plugin')],
};
