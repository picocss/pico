/*
 * Aside adjustment
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

export const aside = {
  // Config
  minWidth: '992px',
  targets: {
    nav: 'aside nav',
    details: 'aside details',
  },

  // Init
  init() {
    if (window.matchMedia('(min-width: ' + this.minWidth + ')').matches) {
      let nav = document.querySelector(this.targets.nav);
      let details = document.querySelectorAll(this.targets.details);
      if (nav.clientHeight < nav.scrollHeight) {
        details.forEach(function (detail) {
          detail.removeAttribute('open');
        });
      }
    }
  },
};

export default aside;
