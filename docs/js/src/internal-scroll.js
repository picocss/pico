/*!
 * Internal Scroll
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  /**
   * Init
   */

  smoothInternalClicks(
    document.querySelectorAll('a:not([href^="https://picocss.com"])')
  );



  /**
   * Smooth internal clicks
   *
   * @param {querySelector} links
   */

  function smoothInternalClicks(links) {
    for (var i=0; i<links.length; i++) {
      if (links[i].href.indexOf('#') != -1) {
        links[i].addEventListener('click', function(event) {
          internalClick(event.target);
        }, false);
      }
    }
  }



  /**
   * Internal Click
   *
   * @param {element} link
   */

  function internalClick(link) {
    event.preventDefault();
    var anchor = link.href.split("#");
    if (anchor[1] != '') {
      anchor = setAnchor(anchor[1]);
      anchor = document.getElementById(anchor);
      scrollToAnchor(anchor);
    }
  }



  /**
   * Set anchor
   * Change anchor if needed
   * @param {string} anchor
   */

  function setAnchor(anchor) {
    mobile = window.matchMedia("(max-width: 991.99px)");
    if (!mobile.matches) {
      if (anchor == "docs") {
        anchor = "start";
      }
    }
    return anchor;
  }



  /**
   * Scroll to anchor
   *
   * @param {element} anchor
   */

  function scrollToAnchor(anchor) {
    var top = distanceToTop(anchor);
    window.scrollBy({ top: top, left: 0, behavior: 'smooth' });
  }



  /**
   * Get distance to top
   *
   * @param {element} target
   */

  function distanceToTop(target) {
    return Math.floor(target.getBoundingClientRect().top);
  }

})();
