/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'red1': '#E66B6B',
        'sky1': '#E0F2FC',
        'sky2': '#66C6DB',
        'brown1': '#815B35',
        'green1': '#68BA65',
      }
    },
  },
  plugins: [],
  corePlugins: {
    preflight: true, // TailwindのリセットCSSを有効にする
  },
}

