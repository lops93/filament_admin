const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php', 
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                main: '#353675',
                'main-lighter': '#4c4ca4',
                'main-darker': '#21214b',
                'main-muted': '#6b6bb3',
                'main-hover': '#2c2c5b',
                'main-focus': '#121232',
                'main-active': '#1d1d40',
                secondary: '#D6D5EF',
                'secondary-darker': '#A980D7',
                danger: colors.rose,
                primary: colors.purple,
                success: colors.green,
                warning: colors.yellow,
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
