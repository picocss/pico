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
  minWidth: '992px',
  interval: 75,
  targets: {
    sections: '[role="document"] > section',
    nav: 'main aside nav',
    active: 'active',
  },

  // Init
  init() {
    if (window.matchMedia('(min-width: ' + this.minWidth + ')').matches) {
      this.setActiveNav();
      this.scrollStop();
    }
  },

  // Set active section in nav
  setActiveNav() {
    // Get active section
    let currentSection = mostVisible(this.targets.sections).getAttribute('id');

    // Remove all active states
    let links = document.querySelectorAll(
      this.targets.nav + ' a.' + this.targets.active
    );
    links.forEach(
      function (link) {
        link.classList.remove(this.targets.active);
      }.bind(this)
    );

    // Set active state
    let activeLink = document.querySelector(
      this.targets.nav + ' a[href="#' + currentSection + '"]'
    );
    activeLink.classList.add(this.targets.active);

    // Open details parent
    activeLink.closest('details').setAttribute('open', '');
  },

  // Scroll stop
  scrollStop() {
    let isScrolling;
    window.addEventListener(
      'scroll',
      function (event) {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(
          function () {
            this.setActiveNav();
          }.bind(this),
          this.interval
        );
      }.bind(this),
      false
    );
  },
};

export default scrollspy;
