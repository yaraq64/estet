/**
 * @file
 * Author: Yaroslav K.
 */

"use strict";

$(document).ready(function() {
  frontSlider();
  roomsSlider();
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
