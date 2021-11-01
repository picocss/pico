/*
 * Toggle navigation
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
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
    this.toggleLink.addEventListener(
      'click',
      function (event) {
        event.preventDefault();
        if (this.state == 'closed-on-mobile') {
          this.state = 'open';
        } else {
          this.state = 'closed-on-mobile';
        }
        this.nav.removeAttribute('class');
        this.nav.classList.add(this.state);
      }.bind(this),
      false
    );
  },

  // Apply navigation state
  applyState() {
    
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