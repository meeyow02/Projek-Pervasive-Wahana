/** @type {import('tailwindcss').Config} */
module.exports = {

  presets: [
    require('./vendor/wireui/wireui/tailwind.config.js')
  ],
  
  content: [
    './resources/views/**/*.blade.php',
    './storage/framework/views/*.php',
    "./resources/**/*.js",
    './vendor/wireui/wireui/resources/**/*.blade.php',
    './vendor/wireui/wireui/ts/**/*.ts',
    './vendor/wireui/wireui/src/View/**/*.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}