$(function () {
	function MySlider1__init() {
		$('.my-slider-1 > .owl-carousel').owlCarousel({
			responsive: {
				0: {
					items: 3
				}
			},
			loop: true,
			dots: false,
			nav: true,
			navText: ['.control-prev', '.control-next']
		});
	}
	MySlider1__init();
});

$(function () {
	window.addEventListener('load', function (event) {
		AOS.init();
	});
});