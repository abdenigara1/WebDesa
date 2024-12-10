/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'down': '0 10px 20px rgba(0, 0, 0, 0.3)',  // Shadow hanya di bawah
        'down-light': '0 4px 8px rgba(0, 0, 0, 0.1)', // Shadow lebih ringan hanya di bawah
        'custom': '0 10px 20px rgba(0, 0, 0, 0.3)', // Shadow dengan warna hitam
        'custom-blue': '0 10px 20px rgba(0, 123, 255, 0.5)', // Shadow dengan warna biru
        'custom-red': '0 10px 20px rgba(255, 0, 0, 0.5)', //
      },
    },
  },
  plugins: [],
}

