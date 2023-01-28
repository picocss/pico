/*
 * Theme switcher
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

export const themeSwitcher = {
  
  // Config
  _scheme: 'auto',
  change: {
    light: '<i>Turn on dark mode</i>',
    dark: '<i>Turn off dark mode</i>',
  },
  buttonsTarget: '.theme-switcher',
  localStorageKey: 'picoPreferredColorScheme',

  // Init
  init() {
    this.scheme = this.schemeFromLocalStorage;
    this.initSwitchers();
  },

  // Get color scheme from local storage
  get schemeFromLocalStorage() {
    if (typeof window.localStorage !== 'undefined') {
      if (window.localStorage.getItem(this.localStorageKey) !== null) {
        return window.localStorage.getItem(this.localStorageKey);
      }
    }
    return this._scheme;
  },

  // Preferred color scheme
  get preferredColorScheme() {
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
      this.preferredColorScheme == 'dark' ? this._scheme = 'dark' : this._scheme = 'light';
    }
    else if (scheme == 'dark' || scheme == 'light') {
      this._scheme = scheme;
    }
    this.applyScheme();
    this.schemeToLocalStorage();
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

  // Store scheme to local storage
  schemeToLocalStorage() {
    if (typeof window.localStorage !== 'undefined') {
      window.localStorage.setItem(this.localStorageKey, this.scheme);
    }
  },
};

export default themeSwitcher;
