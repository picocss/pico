/*
 * Scrollspy
 * Automatically update nav targets based on scroll position
 *
 * Require `most-visible.js` (https://github.com/andyexeter/most-visible)
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

export const scrollspy = {

  // Config
  _minWidth: '992px',
  _interval: 75,
  _targets: {
    sections: '[role="document"] > section',
    nav: 'main aside nav',
    active: 'active',
  },


  // Init
  init() {
    if (window.matchMedia('(min-width: ' + this._minWidth + ')').matches) {
      this.setActiveNav();
      this.scrollStop();
    }
  },


  // Set active section in nav
  setActiveNav() {

    // Get active section
    let currentSection = mostVisible(this._targets.sections).getAttribute('id');

    // Remove all active states
    let links = document.querySelectorAll(this._targets.nav + ' a.' + this._targets.active);
    links.forEach(function(link) {
      link.classList.remove(this._targets.active);
    }.bind(this));

    // Set active state
    let activeLink = document.querySelector(this._targets.nav + ' a[href="#' + currentSection + '"]');
    activeLink.classList.add(this._targets.active);

    // Open details parent
    activeLink.closest('details').setAttribute('open', '');
  },


  // Scroll stop
  scrollStop() {
    let isScrolling;
    window.addEventListener('scroll', function (event) {
      window.clearTimeout(isScrolling);
      isScrolling = setTimeout(function() {
        this.setActiveNav();
      }.bind(this), this._interval);
    }.bind(this), false);
  }
}
