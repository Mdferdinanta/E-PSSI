import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],
    
    darkMode: 'class',

    theme: {
        extend: {
            //
        },
        fontFamily: {
            sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            display: ['Righteous', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'prim': {
                '0': '#FAF5FF',
                '1': '#E9D4FF',
                '2': '#D1A7FD',
                '3': '#B876F9',
                '4': '#A051EF',
                '5': '#8A2EE5',
                '6': '#6D1AC0',
                '7': '#540F99',
                '8': '#37046B',
                '9': '#1F013D',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};