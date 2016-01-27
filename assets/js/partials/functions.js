// This function only echoes 'Hello World!' into console if called.
function consoleTest() {
	console.log('Hello World!');
}

// Tabs Controller

function tabController() {
	$(document).ready(function() {
	    $("#tabs-menu a").click(function(event) {
	        event.preventDefault();
	       	 $('this').parent().addClass("current")
	       	 .end().parent().siblings().removeClass("current");
	        var tab = $(this).attr("href");
	        $(tab).siblings().css("display", "none")
	        .end().fadeIn();
	    });
	});
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
