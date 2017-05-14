$(document).ready(function() {
	$('.logo').hover(function() {
		$(this).find('.logo_color1').css({
			color:' #fff',
			background:' #000'
		});
		$(this).find('.logo_color2').css({
			color:' #000',
			background:' #fff'
		});
	}, function() {
		$(this).find('.logo_color1').css({
			color:' #000',
			background:' #fff'
		});
		$(this).find('.logo_color2').css({
			color:' #fff',
			background:' #000'
		});
	});
});