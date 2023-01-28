/*
 * Customization
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

// Imports
import materialDesignColors from './src/material-design-colors.js';
import colorPicker from './src/color-picker.js';

// Color Picker
colorPicker.colors = materialDesignColors;
colorPicker.init();