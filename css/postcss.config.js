module.exports = {
  map: false,
  plugins: {
    "postcss-discard-comments": {},
    autoprefixer: {
      cascade: false
    },
    "postcss-merge-rules": {},
    "postcss-discard-duplicates": {}
  }
}
