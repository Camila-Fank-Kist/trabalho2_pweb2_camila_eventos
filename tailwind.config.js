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
        },
    },

    plugins: [forms],
};

//não precisa:
module.exports = {
    content: [
      "./src/**/*.{html,js}",
      "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    plugins: [require("tw-elements/dist/plugin.cjs")],
    darkMode: "class"
  };
