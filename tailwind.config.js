/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        laravel: "#ef3b2d",
        react: "#61dafb"
    },
    },
  },
  plugins: [],
}

