/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    "text-[2.625rem]",
    "max-w-[800px]",
    "mx-auto",
    "text-left",
    "text-right",
    "bg-[top_center]",
    "bg-yellow",
    "text-[#FF592F]",
    "bg-[#E2E7EC]"
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem', 
          sm: '1rem',      
          md: '20px',     
          lg: '1rem',     
          xl: '1rem',     
        },
        screens: {
          sm: '100%',
          md: '100%',
          lg: '1140px',
          xl: '1140px',
        },
      },
      colors: {
        pink: {
          DEFAULT: '#AE1F62',
        },
        orange: {
          DEFAULT: '#FF592F',
        },
        black: {
          DEFAULT: '#222731',
        },
        yellow: {
          DEFAULT: '#FFE200',
        },
        gray: {
          DEFAULT: '#4D4D4D',
          400: '#009CDE',
        },
        blue: {
          DEFAULT: '#002A3A',
          400: '#009CDE',
        }

      }, 
      fontFamily: {
        georgia: ['Georgia', 'sans-serif'],
      },
    },
  },
  plugins: [],
};

export default config;
