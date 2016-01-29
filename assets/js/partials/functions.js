

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


// $(function () {
//     html2canvas($("body"), {
//         onrendered: function (canvas) {
//             $(".blurheader").append(canvas);
//             $("canvas").attr("id", "canvas");
//             stackBlurCanvasRGB(
//                 'canvas',
//             0,
//             0,
//             $("canvas").width(),
//             $("canvas").height(),
//             20);
//         }
//     });
//     vv = setTimeout(function () {
//         $("#mare").show();
//         clearTimeout(vv);
//     }, 200);
// });

// $(window).scroll(function () {
//     $("canvas").css(
//         "-webkit-transform",
//         "translatey(-" + $(window).scrollTop() + "px)");
// });

// window.onresize = function () {
//     $("canvas").width($(window).width());
// };

// $(document).bind('touchmove', function () {
//     $("canvas").css(
//         "-webkit-transform",
//         "translatey(-" + $(window).scrollTop() + "px)");
// });

// $(document).bind('touchend', function () {
//     $("canvas").css(
//         "-webkit-transform",
//         "translatey(-" + $(window).scrollTop() + "px)");
// });

$("#headerWrapper").vegas({
	timer: false,
    slides: [
        { src: "img/bg/Background_01.jpg" },
        { src: "img/bg/Background_02.jpg" },
        { src: "img/bg/Background_03.jpg" },
        { src: "img/bg/Background_04.jpg" }
    ]
});

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

$('.wrapper').on('click', function(){
  
  $(this).toggleClass('checked', true);
  
  $('#menu').slideDown();

  $('.checked').on('click', function(){
    $('.wrapper').toggleClass('checked', false);
    $('#menu').slideUp();
  });

});