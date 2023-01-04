module.exports = {
  important: true,
  content: [
    './resources/**/*.{php,js}',
  ],
  theme: {
    fontFamily: {
      display: ['Gilroy', 'sans-serif'],
      body: ['Graphik', 'sans-serif']
    },
    extend: {
      colors: {
        grey: '#f5f5f5',
        cyan: '#9cdbff'
      },
      margin: {
        '96': '24rem',
        '128': '32rem'
      }
    }
  },
  variants: {
    opacity: ['responsive', 'hover']
  }
}