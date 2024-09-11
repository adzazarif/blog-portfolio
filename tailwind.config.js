/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "dark" : "#121212",
        "grey" : "#15181D"
      }
    },
  },
  plugins: [],
}

