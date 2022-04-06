module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/aos/dist/aos.js",
        "./node_modules/aos/dist/aos.css",
        "./node_modules/@lottiefiles/lottie-player/dist/*.js",
    ],
  theme: {
      extend: {
          keyframes: {
              wiggle: {
                  '0%, 100%': {
                      transform: 'rotate(-3deg)'
                  },
                  '50%': {
                      transform: 'rotate(3deg)'
                  },
              },
              topdown: {
                  '0%, 100%': {
                      transform: 'translateY(1rem)'
                  },
                  '50%': {
                      transform: 'translateY(0rem)'
                  },
              }
          },
          animation: {
              wiggle: 'wiggle 2s ease-in-out infinite',
              topdown: 'topdown 6s ease-in-out infinite',
          }
      },
  },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
