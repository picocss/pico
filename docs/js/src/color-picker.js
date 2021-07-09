/*
 * Color Picker
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

export const colorPicker = {

  // Config
  _colors: null,
  _buttonsTarget: '#customization article[data-theme="generated"]',
  _selectorButton: '#customization button[data-color]',
  _selectorSection: '#customization',
  _buttons: null,
  _generatedStyles: null,

   // Set colors
   set colors(colors) {
     this._colors = colors;
   },

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
    for (const color in this._colors) {
      // Buttons
      innerButtons += '<button data-color="'+ color +'" aria-label="Activate '+ color +' theme"></button>';

      // Styles
      innerStyles += `
        button[data-color="${color}"] {
          background-color: ${this._colors[color]['600']};
        }
        [data-theme="light"] button[data-color="${color}"]:hover,
        [data-theme="light"] button[data-color="${color}"]:active,
        [data-theme="light"] button[data-color="${color}"]:focus {
          background-color: ${this._colors[color]['700']}; '
        }
        [data-theme="dark"] button[data-color="${color}"]:hover,
        [data-theme="dark"] button[data-color="${color}"]:active,
        [data-theme="dark"] button[data-color="${color}"]:focus {
          background-color: ${this._colors[color]['500']};
        }`;
    }


    // Insert buttons
    let containerButtons = document.createElement('FIGURE');
    containerButtons.innerHTML = innerButtons;
    document.querySelector(this._buttonsTarget).before(containerButtons);

    // Buttons listeners
    this._buttons = document.querySelectorAll(this._selectorButton);
    this._buttons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        let color = event.target.getAttribute('data-color');
        this.setActiveButton(color);
        this.generateTheme(color);
      }.bind(this), false);
    }.bind(this));

    // Insert CSS Styles
    let containerStyles = document.createElement('STYLE');
    containerStyles.setAttribute('title', 'color-picker');
    this._generatedStyles = this.minifyCSS(innerStyles);
    containerStyles.innerHTML = this._generatedStyles;
    document.querySelector('head').appendChild(containerStyles);
  },


  // Set active button
  setActiveButton(color) {

    // Remove all active states
    this._buttons.forEach(function(button) {
      button.removeAttribute('class');
    }.bind(this));

    // Set active state
    let buttonPicked = document.querySelector(this._selectorButton + '[data-color="' + color + '"]');
    buttonPicked.setAttribute('class', 'picked');
  },


  // Set active button
  generateTheme(color) {
    let name = color;
    let data = this._colors[color];

    // 1. Update name and colors in demo code
    let swaps = {
      '.name': name.charAt(0).toUpperCase() + name.substring(1) + ' ',
      '.c500': data[500],
      '.c600': data[600],
      '.c700': data[700],
      '.c600-outline-light': this.hexToRgbA(data[600], .125),
      '.c600-outline-dark': this.hexToRgbA(data[600], .25),
      '.inverse': data['inverse'],
    }

    Object.keys(swaps).forEach(function(swap) {
      let targets = document.querySelectorAll(this._selectorSection + ' ' + swap);
      targets.forEach(function(target) {
        target.innerHTML = swaps[swap];
      }.bind(this));
    }.bind(this));

    // 2. Update CSS Styles
    const innerStyles = `
    [data-theme="generated"] {
      --h4-color: ${data[700]};
      --primary: ${data[600]};
      --primary-hover: ${data[700]};
      --primary-focus: ${this.hexToRgbA(data[600], .125)};
      --primary-inverse: ${data['inverse']};
    }
    @media only screen and (prefers-color-scheme: dark) {
      :root:not([data-theme="light"]) [data-theme="generated"] {
        --h4-color: ${data[400]};
        --primary: ${data[600]};
        --primary-hover: ${data[500]};
        --primary-focus: ${this.hexToRgbA(data[600], .25)};
        --primary-inverse: ${data['inverse']};
      }
    }
    [data-theme="dark"] [data-theme="generated"] {
      --h4-color: ${data[500]};
      --primary: ${data[600]};
      --primary-hover: ${data[500]};
      --primary-focus: ${this.hexToRgbA(data[600], .25)};
      --primary-inverse: ${data['inverse']};
    }
    [data-theme="generated"] {
      --form-element-active-border-color: var(--primary);
      --form-element-focus-color: var(--primary-focus);
      --switch-color: var(--primary-inverse);
      --switch-checked-background-color: var(--primary);
    }`;

    document.querySelector('style[title="color-picker"]').innerHTML = this._generatedStyles + this.minifyCSS(innerStyles);
  },


  // Minify CSS
  minifyCSS(css) {
    return css.replace(/^ +/gm, '')
  },


  // Hexadecimal to Rgba
  hexToRgbA(hex, alpha) {
    var c;
    if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
      c= hex.substring(1).split('');
      if(c.length== 3) {
        c= [c[0], c[0], c[1], c[1], c[2], c[2]];
      }
      c= '0x' + c.join('');
      return 'rgba(' + [(c>>16)&255, (c>>8)&255, c&255].join(', ') + ', ' + alpha + ')';
    }
    throw new Error('Bad Hex');
  }
}
