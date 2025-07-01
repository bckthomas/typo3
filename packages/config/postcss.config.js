module.exports = {
  plugins: {
    'postcss-inline-svg': {
      paths: ['src/icons'],
      removeFill: true,
      removeStroke: true
    },
  }
};
