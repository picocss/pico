/*
 * Toggle navigation
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

export const toggleNavigation = {
  
  // Config
  _state: 'closed-on-mobile',
  toggleLink: document.getElementById('toggle-docs-navigation'),
  nav: document.querySelector('main > aside > nav'),

  // Init
  init() {
    this.onToggleClick()
  },

  onToggleClick() {
    this.toggleLink.addEventListener('click', event => {
      event.preventDefault();
      this.state == 'closed-on-mobile' 
        ? this.state = 'open' 
        : this.state = 'closed-on-mobile';
      this.nav.removeAttribute('class');
      this.nav.classList.add(this.state);
    }, false);
  },

  // Get state
  get state() {
    return this._state;
  },

  // Set state
  set state(state) {
    this._state = state;
  },
};

export default toggleNavigation;