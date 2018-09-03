/**
 * @file
 * Author: Yaroslav K.
 */

"use strict";

$(document).ready(function() {
  frontSlider();
  roomsSlider();
  portfolioGallery();
  header();
});


function frontSlider() {
  let $slider = $('.front-slider');
  if ($slider.length) {
    $slider.flickity({
      dragThreshold: 20,
      cellAlign: 'left',
      pageDots: true,
      wrapAround: true,
      imagesLoaded: true
    });
  }
}

function roomsSlider() {
  let $slider = $('.rooms-slider');
  if ($slider.length) {
    $slider.flickity({
      dragThreshold: 20,
      cellAlign: 'left',
      pageDots: true,
      wrapAround: true,
      imagesLoaded: true
    });
  }
}

function portfolioGallery() {
  let $slider = $('.portfolio-gallery-slider');
  if ($slider.length) {
    $slider.flickity({
      dragThreshold: 20,
      cellAlign: 'left',
      pageDots: true,
      wrapAround: true,
      imagesLoaded: true
    });
  }
}

function header() {
  var $header = $('.header');
  checkOffset($header.offset().top);
  $(window).on('scroll', function() {
    let scrollValue = $(this).scrollTop();
    checkOffset(scrollValue);
  });
  function checkOffset(offset) {
    if (offset > 0) {
      $header.addClass('header--fixed');
    }
    else {
      $header.removeClass('header--fixed');
    }
  }
}
