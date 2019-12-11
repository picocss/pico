/*!
 * Scrollspy
 * Automatically update nav targets based on scroll position
 *
 * Require `most-visible.js` from https://github.com/andyexeter/most-visible
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  /**
   * Config
   */
  var scrollspy = {
    interval: 75,                            // Delay for detect scroll stop
    sections: '[role="document"] > section', // Target for sections
    nav:      'main aside nav',              // Target for nav
    active:   'active',                      // .class for active element
  };



  /**
   * Init
   */

  if (window.matchMedia("(min-width: 992px)").matches) {
    activeNav();

    scrollStop(
      function () {
        activeNav()
      }
    );
  }



  /**
   * Set active section in nav
   */

  function activeNav() {

    // Get active section
    var section = mostVisible(scrollspy.sections).getAttribute('id');

    // Remove all active states
    var allActive = document.querySelectorAll(scrollspy.nav + ' a.' + scrollspy.active);
    for (var i = 0; i < allActive.length; i++) {
      allActive[i].classList.remove(scrollspy.active);
    }

    // Set active state
    var active = document.querySelector(scrollspy.nav + ' a[href="#' + section + '"]');
    active.classList.add(scrollspy.active);

    // Open details parent
    active.parentNode.parentNode.parentNode.setAttribute('open', '');
  }



  /**
   * Scroll stop
   * Detect when the user stop scrolling
   * Source: https://vanillajstoolkit.com/helpers/scrollstop/
   *
   * @param  {Function} callback The function to run after scrolling
   *
   */

  function scrollStop(callback) {
    var isScrolling;
    window.addEventListener('scroll', function (event) {
      window.clearTimeout(isScrolling);
      isScrolling = setTimeout(function() {
        callback();
      }, scrollspy.interval);
    }, false);
  }

})();
