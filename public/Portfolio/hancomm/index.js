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

		var $currentIndex = $owl.parent().parent().find('.head > .control-box > .index-box > .current-index');

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

			var $totalCount = $mySlider1.find('> .head > .control-box > .index-box > .total-count');
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
		}, 1100);
	}

	$(function () {
		MySlider1__init();
	})
});


//팝업 열기

function Pop1__open(client, title, url) {
	$('.pop-1-bg').addClass('active');
	var $pop1 = $('.pop-1');

	$pop1.find('.client').text(client);
	$pop1.find('.title').text(title);
	$pop1.find('.video-box').html('<video src="' + url + '" controls="" autoplay="" muted></video>');
}

function Pop1__close() {
	$('.pop-1-bg').removeClass('active');
	var $pop1 = $('.pop-1');

	$pop1.find('.client').text('');
	$pop1.find('.title').text('');
	$pop1.find('.video-box').html('');
}

function Pop1__init() {
	$('.pop-1 .btn-close, .pop-1-bg').click(Pop1__close);
}

$(function () {
	Pop1__init();
})

$(function () {
	setTimeout(function () {
		$('.box-1').addClass('active');
	}, 1000);
})

$(function () {
	
})