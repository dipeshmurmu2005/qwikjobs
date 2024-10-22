/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            'grey-text-color': '#5b5b5b',
            'light-danger-color': '#ff337718',
            'light-primary-color': '#ECF2F0',
            'light-purple-color': '#f5ecff',
            'yellow-color': '#FFD75E',
            'light-yellow-color': '#faf6eb',
            'black': '#000000',
            'white': '#ffffff',
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {

                    "primary": "#007456",

                    // 'light-primary-color': '#ECF2F0',

                    "secondary": "#795BC4",

                    // 'light-purple-color': '#f5ecff',

                    "accent": "#007456",

                    "neutral": "#c5c6d0",

                    "base-100": "#ededed",

                    "info": "#ffffff",

                    "success": "#00ff00",

                    "warning": "#00ff00",

                    "error": "#ff0000",
                },
            },
        ],
    },
    plugins: [
        require('daisyui'),
    ],
}
