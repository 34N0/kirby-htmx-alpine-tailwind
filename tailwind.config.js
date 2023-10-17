/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "site/snippets/**/*.php",
    "site/templates/**/*.php",
    // "site/plugins/custom/**/*.php",
  ],
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}