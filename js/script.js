// Services on hover chnage image with text
$(function() {

  $('.button-toggle').mouseover(function() {
   $('#text' + $(this).attr('target')).show("slow" ,"swing");
  });
});

$(function() {

  $('.button-toggle').mouseover(function() {
   $('#img' + $(this).attr('target')).hide("slow" ,"swing");
  });
});


$(function() {

  $('.button-toggle').mouseleave(function() {
   $('#text' + $(this).attr('target')).hide("slow" ,"swing");
  });
});

$(function() {

  $('.button-toggle').mouseleave(function() {
   $('#img' + $(this).attr('target')).show("slow" ,"swing");
  });
});
// End Services


// Start Blog
(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.featured-carousel').owlCarousel({
	    loop: true,
	    autoplay: true,
	    margin:30,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    autoplayHoverPause: true,
	    items: 1,
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:2
	      },
	      1000:{
	        items:3
	      }
	    }
		});

	};
	carousel();

})(jQuery);


// End Blog


 // Clients logo toggle
$(".client-logo").click(function(){
	$('img',this).toggle();
  });

// mouse track img 
// var windowWidth = $(window).width();

// $('.hero-image').mousemove(function(event){
//   var moveX = (($(window).width() / 2) - event.pageX) * 0.1;
 
//   $('.hero-image').css('margin-left', moveX + 'px');

//   $('.hero-image').css('margin-left', -moveX + 'px');

// });
