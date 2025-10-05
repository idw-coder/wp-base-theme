/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
  corePlugins: {
    preflight: true, // TailwindのリセットCSSを有効にする
  },
}

