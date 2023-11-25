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
        extend: {
            colors: {
                "color-primary": "#01051e",
                "color-primary-light": "#020726",
                "color-primary-dark": "#010417",
                "color-secondary": "#ff7d3b",
                "color-gray": "#333",
                "color-white": "#fff",
                "color-blob": "#A427DF",
                "color-log": "#010D50",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true,
            padding: {
              DEFAULT: '20px',
              md: "50px"
            },
          }
    },

    plugins: [forms],
};
