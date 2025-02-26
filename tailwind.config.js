/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        blue: {
          DEFAULT: "#002A3A",
        },
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
