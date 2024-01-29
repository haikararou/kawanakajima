///ローディング
$(function(){
	$(window).on('load',function(){
		$('.loader').delay(500).fadeOut(500);
		$('.loader-bg').delay(800).fadeOut(700);
	});
	setTimeout(function(){
		$('.loader-bg').fadeOut(500);
	},5000);
});

//ハンバーガー
jQuery(function($){
	$('.l-hamburger').on('click',function(){
		$('.l-hamburger__line').toggleClass('active');
		$('.l-hamburger__title').toggleClass('active');
		$('.l-nav').fadeToggle();
	});
});

//Gnavドロップダウン
function mediaQueriesWin(){
	var width = $(window).width();
	if(width <= 768) {//横幅が768px以下の場合
		$(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
		$(".has-child>a").on('click', function() {//has-childクラスがついたaタグをクリックしたら
			var parentElem = $(this).parent();// aタグから見た親要素の<li>を取得し
			$(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
			$(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
			return false;//リンクの無効化
		});
	}else{//横幅が768px以上の場合
		$(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
		$(".has-child").removeClass('active');//activeクラスを削除
		$('.has-child').children('ul').css("display","");//スライドトグルで動作したdisplayも無効化にする
	}
}

//動画のモーダル
$(function() {
	$(".video-open").modaal({
		type: 'video',
		overlay_close:true,//モーダル背景クリック時に閉じるか
		background: '#2A3454', // 背景色
		overlay_opacity:0.8, // 透過具合
		before_open:function(){// モーダルが開く前に行う動作
			$('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
		},
		after_close:function(){// モーダルが閉じた後に行う動作
			$('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
		}
	});
});

// アコーディオン
var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth <= windowSm) {
	/* =================================================== */
	// slideUp, slideDown, slideToggle関数を定義
	/* =================================================== */

	// 要素をスライドしながら非表示にする関数(jQueryのslideUpと同じ)
	const slideUp = (el, duration = 300) => {
		el.style.height = el.offsetHeight + "px";
		el.offsetHeight;
		el.style.transitionProperty = "height, margin, padding";
		el.style.transitionDuration = duration + "ms";
		el.style.transitionTimingFunction = "ease";
		el.style.overflow = "hidden";
		el.style.height = 0;
		el.style.paddingTop = 0;
		el.style.paddingBottom = 0;
		el.style.marginTop = 0;
		el.style.marginBottom = 0;
		setTimeout(() => {
			el.style.display = "none";
			el.style.removeProperty("height");
			el.style.removeProperty("padding-top");
			el.style.removeProperty("padding-bottom");
			el.style.removeProperty("margin-top");
			el.style.removeProperty("margin-bottom");
			el.style.removeProperty("overflow");
			el.style.removeProperty("transition-duration");
			el.style.removeProperty("transition-property");
			el.style.removeProperty("transition-timing-function");
			el.classList.remove("is-open");
		}, duration);
	};

	// 要素をスライドしながら表示する関数(jQueryのslideDownと同じ)
	const slideDown = (el, duration = 300) => {
		el.classList.add("is-open");
		el.style.removeProperty("display");
		let display = window.getComputedStyle(el).display;
		if (display === "none") {
			display = "block";
		}
		el.style.display = display;
		let height = el.offsetHeight;
		el.style.overflow = "hidden";
		el.style.height = 0;
		el.style.paddingTop = 0;
		el.style.paddingBottom = 0;
		el.style.marginTop = 0;
		el.style.marginBottom = 0;
		el.offsetHeight;
		el.style.transitionProperty = "height, margin, padding";
		el.style.transitionDuration = duration + "ms";
		el.style.transitionTimingFunction = "ease";
		el.style.height = height + "px";
		el.style.removeProperty("padding-top");
		el.style.removeProperty("padding-bottom");
		el.style.removeProperty("margin-top");
		el.style.removeProperty("margin-bottom");
		setTimeout(() => {
			el.style.removeProperty("height");
			el.style.removeProperty("overflow");
			el.style.removeProperty("transition-duration");
			el.style.removeProperty("transition-property");
			el.style.removeProperty("transition-timing-function");
		}, duration);
	};

	// 要素をスライドしながら交互に表示/非表示にする関数(jQueryのslideToggleと同じ)
	const slideToggle = (el, duration = 300) => {
		if (window.getComputedStyle(el).display === "none") {
			return slideDown(el, duration);
		} else {
			return slideUp(el, duration);
		}
	};

	/* =================================================== */
	// DOM操作
	/* =================================================== */

	// アコーディオンを全て取得
	const accordions = document.querySelectorAll(".c-accordion");
	// 取得したアコーディオンをArrayに変換(IE対策)
	const accordionsArr = Array.prototype.slice.call(accordions);

	accordionsArr.forEach((accordion) => {
		// Triggerを全て取得
		const accordionTriggers = accordion.querySelectorAll(".c-accordion__item");
		// TriggerをArrayに変換(IE対策)
		const accordionTriggersArr = Array.prototype.slice.call(accordionTriggers);

		accordionTriggersArr.forEach((trigger) => {
			// Triggerにクリックイベントを付与
			trigger.addEventListener("click", () => {
				// '.is-active'クラスを付与or削除
				trigger.classList.toggle("is-active");
				// 開閉させる要素を取得
				const content = trigger.querySelector(".c-accordion dd");
				// 要素を展開or閉じる
				slideToggle(content);
			});
		});
	});
};

// タブ
$(function(){
	$('.c-tab__list li a').click(function (e) {
		e.preventDefault();
		$('.c-tab__list li a').removeClass('active');
		$('.c-tab__content > div').removeClass('active');
		$(this).addClass('active');
		const array = $('.c-tab__list li a').index(this);
		$('.c-tab__content > div').eq(array).fadeIn(300).addClass('active');
		$('.c-tab__content > div').not('.active').hide();
	});
});

// スムーススクロール
window.addEventListener('DOMContentLoaded', function () {
	const anchorLinks = document.querySelectorAll('a[href^="#"]');
	const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

	anchorLinksArr.forEach(function (link) {
		link.addEventListener('click', function (e) {
			e.preventDefault();
			const targetId = link.hash;
			const targetElement = document.querySelector(targetId);
			const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top; //ここに- 50 などと数値を入れるとヘッダー固定のスクロールが実現できる
			window.scrollTo({
				top: targetOffsetTop,
				behavior: "smooth"
			});
		});
	});
});