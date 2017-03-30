/**
 * File functions.js.
 *
 * Theme Customizer global functions
 *
 */

(function ($) {
  'use strict';

  $(document).ready(function () {


    // :: Index of jQuery Active Code ::

    // :: Screenshots Slider Active Code
    // :: Testimonials Slider Active Code


    // :: Screenshots Slider Active Code
    if ($.fn.owlCarousel) {
      $(".app_screenshots").owlCarousel({
        items: 5,
        margin: 30,
        loop: true,
        nav: true,
        navText: ['<i class="icofont icofont-swoosh-left"></i>', '<i class="icofont icofont-swoosh-right"></i>'],
        center: true,
        dots: false,
        autoplay: true,
        smartSpeed: 500,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 3
          },
          992: {
            items: 5
          }
        }
      });
    }

    // :: Testimonials Slider Active Code
    if ($.fn.owlCarousel) {
      $(".testimonials").owlCarousel({
        items: 2,
        margin: 30,
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 500,
        responsive: {
          0: {
            items: 1
          },
          992: {
            items: 1
          }
        }
      });
    }

  });
})(jQuery);