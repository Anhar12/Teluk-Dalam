/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        primary: '#0ea5e9',
        secondary: '#38bdf8',
        dark: '#1f2937',
        light: '#6b7280'
      },
      screens: {
        '2xl': '1320px'
      }
    },
  },
  plugins: [],
}
