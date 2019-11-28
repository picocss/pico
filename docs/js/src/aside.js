/*!
 * Aside adjustment
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  // Close details if aside > nav have a scrollbar
  var navWidth = document.querySelector('aside nav').clientWidth;
  if (navWidth < 200) {
    var asideDetails = document.querySelectorAll("aside details");
    for (var i = 1; i < asideDetails.length; i++) {
     asideDetails[i].removeAttribute("open");
    }
  }

})();
