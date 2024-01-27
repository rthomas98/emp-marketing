/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./blocks/**/*.{php,html,js}",
    "./*.{php,html,js}"
  ],
  theme: {
    extend: {
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "gradient-conic": "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
      },
      colors: {
        "em-pink": "#BD1550",
        "em-purple": "#231B53",
        "em-yellow": "#FFC259",
        "em-dark-purple": "#1F1946",
        "em-light": "#F8F9FA",
      },
    },
  },
  plugins: [],
}

