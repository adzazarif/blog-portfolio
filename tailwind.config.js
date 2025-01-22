/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                'gradient-rotate': 'gradient-rotate 1s linear infinite',
              },
              keyframes: {
                'gradient-rotate': {
                  '0%': { 'background-position': '0% 50%' },
                  '50%': { 'background-position': '100% 50%' },
                  '100%': { 'background-position': '0% 50%' },
                },
              },
            colors: {
                dark: "#323444",
                grey: "#15181D",
                yellow: "#F2B149",
            },
        },
    },
    darkMode: "class",
    plugins: [],
};
