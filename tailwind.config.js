/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        alert: 'alert 6.1s ease-in-out',
        expand: 'expand 6.1s ease-in-out',
      },
      keyframes: {
        alert: {
          '0%': { transform: 'translateY(50px)' },
          '10%': { transform: 'translateY(0px)' },
          '90%': { transform: 'translateY(0px)' },
          '100%': { transform: 'translateY(50px)' },
        },
        expand: {
          '0%': { width: '100%' },
          '5%': { width: '100%' },
          '90%': { width: '0%' },
          '100%': { width: '0%' },
        },
      },
      fontFamily: {
        poppins: '"Poppins", sans-serif',
      }
    },
  },
  plugins: [
  ],
}