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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary" : "#2c6e49",
                "primary-50" : "#f3faf5",
                "primary-100" : "#e2f6ea",
                "primary-200" : "#c7ebd6",
                "primary-300" : "#9bdab6",
                "primary-400" : "#68c08e",
                "primary-500" : "#43a46d",
                "primary-600" : "#328757",
                "primary-800" : "#26553b",
                "primary-900" : "#214632",
                "primary-950" : "#0d2619",
                "secondary" : "#328757",
                "secondary-2" : "#43a46d",
                "third" : "#26553b",
                "fourth" : "#214632"
            }
        },
    },

    plugins: [forms],
};
