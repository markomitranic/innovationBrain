

// This function only echoes 'Hello World!' into console if called.
function consoleTest() {
	console.log('Hello World!');
}

// Tabs Controller

function tabController() {
    $("#tabs-menu a").click(function(event) {
        event.preventDefault();
       	$(this).parent().addClass("current").end().parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(tab).siblings().css("display", "none")
        .end().fadeIn();
    });
}


// Newsletter popup controller
function newsletterPopup() {
	$('#newsletter-button').on('click', function() {
		$('#newsletter').fadeIn();
		$('#curtain').fadeIn().on('click', function() {
			newsletterPopout();
		});
		$('#newsletter-close').on('click', function() {
			newsletterPopout();
		});
	});
}
function newsletterPopout() {
	$('#newsletter').fadeOut();
	$('#curtain').fadeOut();
}




// Background image change plugin
$("#headerWrapper").vegas({
	timer: false,
    slides: [
        { src: "img/bg/Background_01.jpg" },
        { src: "img/bg/Background_02.jpg" },
        { src: "img/bg/Background_03.jpg" },
        { src: "img/bg/Background_04.jpg" }
    ]
});


// Arrow scrolling
$(function() {
    $('.arrow').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top,
            // stop: $anchor.css('border', 'none')
        }, 1000, 'easeOutSine');
        event.preventDefault();
    });
});


// Hamburger menu animation
$('.wrapper').on('click', function(){
  
  $(this).finish().toggleClass('checked');

  if (!($('#menu').is(':visible'))) {
      $('#menu').finish().css('opacity', '0')
                .slideDown()
                .animate(
                    { opacity: 1 },
                    { queue: false });
  } else {
      $('#menu').finish().css('opacity', '1')
                .slideUp()
                .animate(
                    { opacity: 0 },
                    { queue: false });  
}
  


});




// Hero MOBILE carousel
$('.mobile-hero-carousel .icon-left').on('click', function(e) {
    e.preventDefault();
  var sections = $('.hero-carousel-inner section');  
  sections.first().hide(function() {
    sections.last().show();
    sections.last().insertBefore(sections.first());
  });
});


$('.mobile-hero-carousel .icon-right').on('click', function(e) {
    e.preventDefault();
  var sections = $('.hero-carousel-inner section');  
  sections.first().hide(function() {
    sections.first().next().show();
    sections.first().insertAfter(sections.last());
  });
});


