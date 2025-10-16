/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'red1': '#E66B6B',
        'sky1': '#E0F2FC',
        'sky2': '#66C6DB',
        'blue1': '#0083C4',
        'brown1': '#815B35',
        'brown2': '#F7E1CA',
        'green1': '#68BA65',
      },
      backgroundColor: {
        'blue1': '#0083C4',
      },
      aspectRatio: {
        '8/3': '8 / 3',
        '8/5': '8 / 5',
      },
    },
  },
  plugins: [],
  corePlugins: {
    preflight: true, // TailwindのリセットCSSを有効にする
  },
}

