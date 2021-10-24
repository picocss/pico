/*
 * Add some magic to Pico docs
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

// Imports
import aside from './src/aside.js';
import themeSwitcher from './src/theme-switcher.js';
import materialDesignColors from './src/material-design-colors.js';
import colorPicker from './src/color-picker.js';
import grid from './src/grid.js';
import scrollspy from './src/scrollspy.js';

// Aside initial state
aside.init();

// Theme switcher
themeSwitcher.addButton({
  tag: 'BUTTON',
  class: 'contrast switcher theme-switcher',
  target: 'body',
});
themeSwitcher.init();

// Color Picker
colorPicker.colors = materialDesignColors;
colorPicker.init();

// Grid Interaction
grid.init();

// Scrollspy
scrollspy.init();
