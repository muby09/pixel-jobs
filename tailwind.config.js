// import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                "black": "#060606"
            },
            fontFamily: {
                'hanken': ['Hanken Grotesk', 'sans-serif'],
            },
            fontSize: {
                "2xs": "0.625rem" //10px
            },
        },
    },
    plugins: [],
}

// module.exports = {
//   content: [
//     './resources/**/*.blade.php',
//     './resources/**/*.js',
//     './resources/**/*.vue',
//     './resources/css/**/*.css',
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// };
