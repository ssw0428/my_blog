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
			navText: ['좌', '우']
		});
	}
	MySlider1__init();
});
$(function () {
	alert("hi");
});