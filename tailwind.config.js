/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      screens: {
        '1920': '1920px',
        '1800': '1800px',
        '1280': '1280px',
        '1370': '1370px',
        '1080': '1080px',
        '880': '880px',
        '800': '800px',
        '450': '450px',
        '400': '400px',
        'lg': '1024px',
        'lgv': {'raw'
        : '(orientation: portrait) and (min-height: 500px)'},
        colors: {
          'blue': '#1fb6ff',
          'purple': '#7e5bef',
          'pink': '#ff49db',
          'orange': '#ff7849',
          'green': '#13ce66',
          'yellow': '#ffc82c',
          'gray-dark': '#273444',
          'gray': '#8492a6',
          'gray-light': '#d3dce6',
        },

            'xsm': '450px',
         },
      fontFamily: {
        'redHat': ['"Red Hat Display"', 'sans-serif'],
      },
    },
  },
  plugins: [],
  }
