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
