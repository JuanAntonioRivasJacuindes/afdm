const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                'primary': '#2473AB',
                'secondary': '#2c9fcd',
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            aspectRatio: {
                '4/3': '4 / 3',
                '16/9': '16 / 9',
                '18/9': '18 / 9',
                '21/9': '21 / 9',
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
