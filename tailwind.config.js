/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {
        fontFamily: {
            tommyoutline: ['MADE TOMMY Outline', 'sans-serif'],
            tommy: ['MADE TOMMY', 'sans-serif'],
        }
    }
  },
  plugins: [require('tw-elements/dist/plugin')],
}
