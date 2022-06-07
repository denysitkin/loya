$(document).ready(function() {
	
	Inputmask("+7 (999) 999-99-99").mask($('#phone'));

	$('.portfolio__slider').slick({
		slidesToShow: 3,
		centerMode: true,
		initialSlide: 3,
		infinite: false,
	});

});