/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'ciel': {
          red: '#E66B6B',
        }
      }
    },
  },
  plugins: [],
  corePlugins: {
    preflight: true, // TailwindのリセットCSSを有効にする
  },
}

