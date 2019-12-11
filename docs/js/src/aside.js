/*!
 * Aside adjustment
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  if (window.matchMedia("(min-width: 992px)").matches) {

    // Close details if aside > nav have a scrollbar
    var nav        = document.querySelector("aside nav");
    var navDetails = document.querySelectorAll("aside details");

    if (nav.clientHeight < nav.scrollHeight) {
      for (var i = 1; i < navDetails.length; i++) {
        navDetails[i].removeAttribute("open");
      }
    }
  }

})();
