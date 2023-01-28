/*
 * Color Picker
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

export const colorPicker = {
  
  // Config
  colors: null,
  buttonsTarget: '#customization article[data-theme="generated"]',
  selectorButton: '#customization button[data-color]',
  selectorSection: '#customization',
  buttons: null,
  generatedStyles: null,

  // Init
  init() {
    this.generateButtons();
    this.setActiveButton('pink');
    this.generateTheme('pink');
  },

  // Generate Buttons
  generateButtons() {
    // Init
    let innerButtons = '';
    let innerStyles = '';

    // Loop colors
    for (const color in this.colors) {
      // Buttons
      innerButtons += `<button data-color="${color}" aria-label="Activate ${color} theme"></button>`;

      // Styles
      innerStyles += `
        button[data-color="${color}"] {
          background-color: ${this.colors[color]['600']};
        }
        [data-theme="light"] button[data-color="${color}"]:hover,
        [data-theme="light"] button[data-color="${color}"]:active,
        [data-theme="light"] button[data-color="${color}"]:focus {
          background-color: ${this.colors[color]['700']}; '
        }
        [data-theme="dark"] button[data-color="${color}"]:hover,
        [data-theme="dark"] button[data-color="${color}"]:active,
        [data-theme="dark"] button[data-color="${color}"]:focus {
          background-color: ${this.colors[color]['500']};
        }`;
    }

    // Insert buttons
    let containerButtons = document.createElement('FIGURE');
    containerButtons.innerHTML = innerButtons;
    document.querySelector(this.buttonsTarget).before(containerButtons);

    // Buttons listeners
    this.buttons = document.querySelectorAll(this.selectorButton);
    this.buttons.forEach( button => { 
      button.addEventListener('click', event => {
        let color = event.target.getAttribute('data-color');
        this.setActiveButton(color);
        this.generateTheme(color);
      }, false);
    });

    // Insert CSS Styles
    let containerStyles = document.createElement('STYLE');
    containerStyles.setAttribute('title', 'color-picker');
    this.generatedStyles = this.minifyCSS(innerStyles);
    containerStyles.innerHTML = this.generatedStyles;
    document.querySelector('head').appendChild(containerStyles);
  },

  // Set active button
  setActiveButton(color) {
    // Remove all active states
    this.buttons.forEach( button => {
      button.removeAttribute('class');
    });

    // Set active state
    let buttonPicked = document.querySelector(this.selectorButton + '[data-color="' + color + '"]');
    buttonPicked.setAttribute('class', 'picked');
  },

  // Set active button
  generateTheme(color) {
    let name = color;
    let data = this.colors[color];

    // 1. Update name and colors in demo code
    let swaps = {
      '.name': name.charAt(0).toUpperCase() + name.substring(1) + ' ',
      '.c500': data[500],
      '.c600': data[600],
      '.c700': data[700],
      '.c600-outline-light': this.hexToRgbA(data[600], 0.125),
      '.c600-outline-dark': this.hexToRgbA(data[600], 0.25),
      '.inverse': data['inverse'],
    };

    Object.keys(swaps).forEach( swap => {
      let targets = document.querySelectorAll(this.selectorSection + ' ' + swap);
      targets.forEach( target => {
        target.innerHTML = swaps[swap];
      });
    });

    // 2. Update CSS Styles
    const innerStyles = `
    [data-theme="generated"] {
      --h4-color: ${data[700]};
      --primary: ${data[600]};
      --primary-hover: ${data[700]};
      --primary-focus: ${this.hexToRgbA(data[600], 0.125)};
      --primary-inverse: ${data['inverse']};
    }
    @media only screen and (prefers-color-scheme: dark) {
      :root:not([data-theme="light"]) [data-theme="generated"] {
        --h4-color: ${data[400]};
        --primary: ${data[600]};
        --primary-hover: ${data[500]};
        --primary-focus: ${this.hexToRgbA(data[600], 0.25)};
        --primary-inverse: ${data['inverse']};
      }
    }
    [data-theme="dark"] [data-theme="generated"] {
      --h4-color: ${data[500]};
      --primary: ${data[600]};
      --primary-hover: ${data[500]};
      --primary-focus: ${this.hexToRgbA(data[600], 0.25)};
      --primary-inverse: ${data['inverse']};
    }
    [data-theme="generated"] {
      --form-element-active-border-color: var(--primary);
      --form-element-focus-color: var(--primary-focus);
      --switch-color: var(--primary-inverse);
      --switch-checked-background-color: var(--primary);
    }`;

    document.querySelector('style[title="color-picker"]').innerHTML =
      this.generatedStyles + this.minifyCSS(innerStyles);
  },

  // Minify CSS
  minifyCSS(css) {
    return css.replace(/^ +/gm, '');
  },

  // Hexadecimal to Rgba
  hexToRgbA(hex, alpha) {
    let c;
    if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
      c = hex.substring(1).split('');
      if (c.length == 3) {
        c = [c[0], c[0], c[1], c[1], c[2], c[2]];
      }
      c = '0x' + c.join('');
      return (
        'rgba(' +
        [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(', ') +
        ', ' +
        alpha +
        ')'
      );
    }
    throw new Error('Bad Hex');
  },
};

export default colorPicker;
