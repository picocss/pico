module.exports = {
  syntax: "postcss-scss",
  map: false,
  plugins: {
    "css-declaration-sorter": {
      order: "smacss"
    },
    "postcss-merge-rules": {},
    "postcss-discard-duplicates": {}
  }
}
