const $ = jQuery.noConflict();

$(function () {
	$('.c-related__slide').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		centerMode: false,
		centerPadding: "0",
		autoplay: false,
		autoplaySpeed: 800,
		infinite: false,
		// loop: false,
		dots: false,
		//speed: 5000,
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

	$('#js-slick').slick({
		autoplay: false, //自動再生
		autoplaySpeed: 800, //自動再生の速度
		arrows: true, //前へ・次への矢印ナビを表示
		dots: true, //ドット型のナビを表示
		infinite: false //無限ループ
	});

});
