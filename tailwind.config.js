import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            '3xl': {'max': '2560'},
            '2xl': {'max': '1440'},
            'xl': {'max': '1024'},
            'lg': {'max': '768'},
            'md': {'max': '425'},
            'sm': {'max': '375'},
            'xs': {'max': '320'}
        },
        extend: {
            colors: {
                primaryGreen: 'rgb(var(--primary-green) / <alpha-value>)',
                secondaryGreen: 'rgb(var(--secondary-green) / <alpha-value>)',
                primaryWhite: 'rgb(var(--primary-white) / <alpha-value>)',
                secondaryWhite: 'rgb(var(--secondary-white) / <alpha-value>)',
                primaryBlack: 'rgb(var(--primary-black) / <alpha-value>)',
                secondaryBlack: 'rgb(var(--secondary-black) / <alpha-value>)',

                accentOrange: 'rgb(var(--accent-orange) / <alpha-value>)',
                accentRed: 'rgb(var(--accent-red) / <alpha-value>)',
                accentBlue: 'rgb(var(--accent-blue) / <alpha-value>)',
                accentWhite: 'rgb(var(--accent-white) / <alpha-value>)',
                accentGray: 'rgb(var(--accent-gray) / <alpha-value>)',
                accentGreen: 'rgb(var(--accent-green) / <alpha-value>)',

                tertiaryGreen: 'rgb(var(--tertiary-green) / <alpha-value>)',
                tertiaryWhite: 'rgb(var(--tertiary-white) / <alpha-value>)',
                tertiaryBlack: 'rgb(var(--tertiary-black) / <alpha-value>)',
            },
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],

};
