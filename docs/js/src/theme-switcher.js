/*
 * Theme switcher
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

export const themeSwitcher = {
  // Config
  _scheme: 'auto',
  change: {
    light: '<i>Turn on dark mode</i>',
    dark: '<i>Turn off dark mode</i>',
  },
  buttonsTarget: '.theme-switcher',

  // Init
  init() {
    this.scheme = this._scheme;
    this.initSwitchers();
  },

  // Prefered color scheme
  get preferedColorScheme() {
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
      return 'dark';
    } else {
      return 'light';
    }
  },

  // Init switchers
  initSwitchers() {
    const buttons = document.querySelectorAll(this.buttonsTarget);
    buttons.forEach(
      function (button) {
        button.addEventListener(
          'click',
          function (event) {
            if (this.scheme == 'dark') {
              this.scheme = 'light';
            } else {
              this.scheme = 'dark';
            }
          }.bind(this),
          false
        );
      }.bind(this)
    );
  },

  // Add new button
  addButton(config) {
    // Insert Switcher
    let button = document.createElement(config.tag);
    button.className = config.class;
    document.querySelector(config.target).appendChild(button);
  },

  // Set scheme
  set scheme(scheme) {
    if (scheme == 'auto') {
      if (this.preferedColorScheme == 'dark') {
        this._scheme = 'dark';
      } else {
        this._scheme = 'light';
      }
    }

    // Set to Dark
    else if (scheme == 'dark' || scheme == 'light') {
      this._scheme = scheme;
    }

    // Set to Apply theme
    this.applyScheme();
  },

  // Get scheme
  get scheme() {
    return this._scheme;
  },

  // Apply scheme
  applyScheme() {
    // Root attribute
    document.querySelector('html').setAttribute('data-theme', this.scheme);

    // Buttons text
    const buttons = document.querySelectorAll(this.buttonsTarget);
    let text;
    buttons.forEach(
      function (button) {
        if (this.scheme == 'dark') {
          text = this.change.dark;
        } else {
          text = this.change.light;
        }
        button.innerHTML = text;
        button.setAttribute('aria-label', text.replace(/<[^>]*>?/gm, ''));
      }.bind(this)
    );
  },
};

export default themeSwitcher;
