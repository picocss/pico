/*
 * Add some magic to Pico docs
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

// Imports
import themeSwitcher from './src/theme-switcher.js';
import toggleNavigation from './src/toggle-navigation';

// Theme switcher
themeSwitcher.addButton({
  tag: 'BUTTON',
  class: 'contrast switcher theme-switcher',
  target: 'body',
});
themeSwitcher.init();

// Toggle navigation
toggleNavigation.init();