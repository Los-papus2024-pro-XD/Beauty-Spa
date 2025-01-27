/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      Kite: ["Kite One", 'sans-serif'],
      Kanit: ["Kanit", 'sans-serif'],
      Oswald: ["Oswald", 'sans-serif'],
      Julius: ["Julius Sans One", 'sans-serif'],
      Kulim: ["Kulim Park", 'sans-serif'],
      Karla: ["Karla", 'sans-serif'],
      Junge: ["Junge", 'cursive']

    },
    extend: {
      colors: {
        'spa': {
          '50': '#fcf6fd',
          '100': '#f7edfa',
          '200': '#f0d9f5',
          '300': '#e6bbec',
          '400': '#d792e0',
          '500': '#c267ce',
          '600': '#a748b1',
          '700': '#89388f',
          '800': '#733078',
          '900': '#612c63',
          '950': '#3e133f',
        },
        'spa2': {
          '50': '#faf6f0',
          '100': '#f1e6d4',
          '200': '#e1caa6',
          '300': '#d1ac78',
          '400': '#c69459',
          '500': '#bc7944',
          '600': '#a15d38',
          '700': '#8a4933',
          '800': '#723c2e',
          '900': '#5e3229',
          '950': '#351913',
        },
        'spa3': {
          '50': '#f7ffe5',
          '100': '#eaffc7',
          '200': '#d6ff95',
          '300': '#b9fe58',
          '400': '#9df526',
          '500': '#7cdc06',
          '600': '#59a600',
          '700': '#488506',
          '800': '#3b690b',
          '900': '#32580f',
          '950': '#183201',
        },


      }

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

