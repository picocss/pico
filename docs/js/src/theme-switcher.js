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
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  },

  // Init switchers
  initSwitchers() {
    const buttons = document.querySelectorAll(this.buttonsTarget);
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        this.scheme == 'dark' ? this.scheme = 'light' : this.scheme = 'dark';
      }, false);
    });
  },

  // Add new button
  addButton(config) {
    let button = document.createElement(config.tag);
    button.className = config.class;
    document.querySelector(config.target).appendChild(button);
  },

  // Set scheme
  set scheme(scheme) {
    if (scheme == 'auto') {
      this.preferedColorScheme == 'dark' ? this._scheme = 'dark' : this._scheme = 'light';
    }
    else if (scheme == 'dark' || scheme == 'light') {
      this._scheme = scheme;
    }
    this.applyScheme();
  },

  // Get scheme
  get scheme() {
    return this._scheme;
  },

  // Apply scheme
  applyScheme() {
    document.querySelector('html').setAttribute('data-theme', this.scheme);
    const buttons = document.querySelectorAll(this.buttonsTarget);
    buttons.forEach(
      button => {
        const text = this.scheme == 'dark' ? this.change.dark : this.change.light;
        button.innerHTML = text;
        button.setAttribute('aria-label', text.replace(/<[^>]*>?/gm, ''));
      }
    );
  },
};

export default themeSwitcher;
