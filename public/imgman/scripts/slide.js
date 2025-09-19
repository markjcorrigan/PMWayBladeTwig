/**
 * Created by DEVSCREENCAST on 3/4/2017.
 */

$(document).ready(function () {
   $('.gallery').slick({
  centerMode: false,
  focusOnSelect: true,
  centerPadding: '10px',
  slidesToShow: 12,
  
  rows:7,
 
    responsive: [
    {
      breakpoint: 1000,
      settings: {
        arrows: true,
        centerMode: false,
        centerPadding: '10px',
        slidesToShow: 12,
		 slidesToScroll: 12,
		 
  dots: false,
		      }
    },

  ]
});



});







