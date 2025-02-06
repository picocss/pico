const fs = require('fs');
const path = require('path');

// Define the source and destination paths
const filesToCopy = [
  { src: 'css/pico.css', dest: 'docs/pico.css' },
  { src: 'css/pico.min.css', dest: 'docs/pico.min.css' },
  { src: 'css/pico.colors.min.css', dest: 'docs/pico.colors.min.css' }
];

// Copy each file to the destination
filesToCopy.forEach(file => {
  fs.copyFileSync(file.src, file.dest);
  console.log(`[@Yohns/PicoCSS] ✨ Copied new file to ${file.dest}`);
});
