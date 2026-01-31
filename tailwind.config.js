/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Foundation/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      colors: {
        // Colores principales de la marca CV Producciones
        primary: {
          50: '#fff7ed',
          100: '#ffedd5',
          200: '#fed7aa',
          300: '#fdba74',
          400: '#fb923c',  // Naranja principal
          500: '#f97316',  // Naranja fuerte - color principal
          600: '#ea580c',  // Naranja oscuro
          700: '#c2410c',  // Naranja más oscuro
          800: '#9a3412',  // Naranja muy oscuro
          900: '#7c2d12',  // Naranja darkest
          950: '#431407',
        },
        secondary: {
          50: '#fef3c7',
          100: '#fde68a',
          200: '#fcd34d',
          300: '#fbbf24',
          400: '#f59e0b',
          500: '#d97706',
          600: '#b45309',
          700: '#92400e',
          800: '#78350f',
          900: '#713f12',
          950: '#451a03',
        },
        // Paleta de colores optimizada para fotografía
        accent: {
          blue: '#3b82f6',      // Azul profesional
          purple: '#a855f7',    // Púrpura creativo
          pink: '#ec4899',     // Rosa elegante
        },
        // Colores de fondo mejorados
        'background-dark': '#0f172a',      // Fondo oscuro profundo
        'background-light': '#f8fafc',     // Fondo claro
        'surface-dark': '#1e293b',         // Superficie oscura
        'surface-light': '#ffffff',        // Superficie clara
      },
      fontFamily: {
        display: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      animation: {
        'fade-in-up': 'fadeInUp 0.6s ease-out',
        'float': 'float 3s ease-in-out infinite',
        'glow': 'glow 2s ease-in-out infinite',
      },
      keyframes: {
        fadeInUp: {
          '0%': {
            opacity: '0',
            transform: 'translateY(30px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
        float: {
          '0%, 100%': {
            transform: 'translateY(0px)',
          },
          '50%': {
            transform: 'translateY(-10px)',
          },
        },
        glow: {
          '0%, 100%': {
            'box-shadow': '0 0 20px rgba(249, 115, 22, 0.3)',
          },
          '50%': {
            'box-shadow': '0 0 40px rgba(249, 115, 22, 0.6)',
          },
        },
      },
      boxShadow: {
        'primary-glow': '0 0 30px rgba(249, 115, 22, 0.3)',
        'primary-lg': '0 10px 40px rgba(249, 115, 22, 0.2)',
      },
    },
  },
  plugins: [],
}