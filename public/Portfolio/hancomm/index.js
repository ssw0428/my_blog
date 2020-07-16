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

$(function () {
	function MySlider1__updateCurrentPageNumber(event) {
		var $owl = $(event.target);
		var index = $owl.find('.owl-item.active').first().find(' > .item').attr('data-no');
		index = parseInt(index);

		var $currentIndex = $owl.parent().parent().find('.controler > .control-box > .index-box > .current-index');

		$currentIndex.text(index + 1);
	}

	function MySlider1__init() {
		var owlNowSliding = false;
		var slidingDuration = 1000;

		$('.my-slider-1').each(function (index, el) {
			var $mySlider1 = $(el);
			var $item = $mySlider1.find('.item');
			totalCount = $item.length;

			$item.each(function (index, itemEl) {
				var $itemEl = $(itemEl);
				$itemEl.attr('data-no', $itemEl.index());
			});

			var $totalCount = $mySlider1.find('> .head >  .control-box > .index-box > .total-count');
			$totalCount.text(totalCount);
		});

		var owl = $('.my-slider-1 .owl-carousel').owlCarousel({
			loop: true,
			items: 6,
			smartSpeed: slidingDuration,
			onInitialized: MySlider1__updateCurrentPageNumber,
			onTranslated: MySlider1__updateCurrentPageNumber,
		});

		owl.on('mousewheel', '.owl-stage', function (e) {
			e.preventDefault();

			if (owlNowSliding) {
				return;
			}

			owlNowSliding = true;

			var deltaY = e.deltaY;

			if (deltaY == undefined) {
				deltaY = e.originalEvent.wheelDelta;
			}

			if (deltaY < 0) {
				owl.trigger('next.owl');
			} else {
				owl.trigger('prev.owl');
			}

			setTimeout(function () {
				owlNowSliding = false;
			}, slidingDuration);
		});

		$('.my-slider-1 > .head > .control-box > .nav-box > span').click(function () {
			if (owlNowSliding) {
				return;
			}

			owlNowSliding = true;

			var $clicked = $(this);

			if ($clicked.is(':first-child')) {
				owl.trigger('prev.owl');
			} else {
				owl.trigger('next.owl');
			}

			setTimeout(function () {
				owlNowSliding = false;
			}, slidingDuration);
		});

		setTimeout(function () {
			$('.my-slider-1').addClass('active');
		}, 1500);
	}

	$(function () {
		MySlider1__init();
	})
});