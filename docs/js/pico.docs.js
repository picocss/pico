/*
 * Add some magic to Pico docs
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

// Imports
import { aside } from './components/aside.js';
import { themeSwitcher } from './components/theme-switcher.js';
import { materialDesignColors } from './components/material-design-colors.js';
import { colorPicker } from './components/color-picker.js';
import { grid } from './components/grid.js';
import { scrollspy } from './components/scrollspy.js';

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
