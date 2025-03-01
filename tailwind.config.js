/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            animation: {
                'bounce-slow': 'bounce 10s infinite',
              },
            colors: {
                dark: "#323444",
                grey: "#15181D",
                yellow: "#F2B149",
            },
        },
    },
    darkMode: "class",
    plugins: [require("flowbite/plugin")],
};
