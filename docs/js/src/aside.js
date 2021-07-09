/*
 * Aside adjustment
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2021 - Licensed under MIT
 */

export const aside = {

  // Config
  _minWidth: '992px',
  _targets: {
    nav: 'aside nav',
    details: 'aside details',
  },


  // Init
  init() {
    if (window.matchMedia('(min-width: ' + this._minWidth + ')').matches) {
      let nav = document.querySelector(this._targets.nav);
      let details = document.querySelectorAll(this._targets.details);
      if (nav.clientHeight < nav.scrollHeight) {
        details.forEach(function(detail) {
          detail.removeAttribute("open");
        });
      }
    }
  }
}
