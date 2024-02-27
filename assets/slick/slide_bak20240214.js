$(function () {
	// $('#js-slick').slick({
	// 	autoplay: true, //自動再生
	// 	autoplaySpeed: 3000, //自動再生の速度
	// 	arrows: true, //前へ・次への矢印ナビを表示
	// 	dots: true, //ドット型のナビを表示
	// 	infinite: true //無限ループ
	// });

	$('.p-home__special__slide').slick({
		slidesToShow: 3.5,
		slidesToScroll: 1,
		centerMode: false,
		centerPadding:'0',
		autoplay: true,
		autoplaySpeed: 800,
		infinite: false,
		loop: true,
		dots: false,
		speed: 5000,
		arrows: false,
		responsive: [{
			breakpoint: 800,
				settings: {
					slidesToShow: 2,
					centerMode: false,
			}
		},
		{
			breakpoint: 600,
				settings: {
					slidesToShow: 1.3,
					centerMode: true,
			}
		}]
	});

	$('.c-related__slide').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		centerMode: false,
		centerPadding: "0",
		autoplay: false,
		autoplaySpeed: 800,
		infinite: false,
		loop: false,
		dots: false,
		speed: 5000,
		arrows: false,
		responsive: [{
			breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
			breakpoint: 600,
				settings: {
					slidesToShow: 1.5,
			}
		}]
	});
});
