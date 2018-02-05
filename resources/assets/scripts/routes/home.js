export default {
  init() {
    // JavaScript to be fired on the home page
    "use strict";

    // Closes responsive menu when a scroll trigger link is clicked
    jQuery('.js-scroll-trigger').click(function() {
      jQuery('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    jQuery('body').scrollspy({
      target: '#mainNav',
      offset: 57,
    });

    // Collapse Navbar
    var navbarCollapse = function() {
      if (jQuery("#mainNav").offset().top > 100) {
        jQuery("#mainNav").addClass("navbar-shrink");
      } else {
        jQuery("#mainNav").removeClass("navbar-shrink");
      }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    jQuery(window).scroll(navbarCollapse);
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
