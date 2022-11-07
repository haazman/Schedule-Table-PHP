/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
//npx tailwindcss -i input.css -o ./dist/output.css --watch