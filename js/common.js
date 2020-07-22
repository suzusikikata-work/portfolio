// jsでトグルメニュー制御
$(function() {
	var $glovalNavi = $('.menu-trigger');
	var $glovalui = $('.top-navigation');

	// Nav Toggle Button
	$('.menu-trigger').click(function(){

		$glovalui.toggleClass('active');
		$glovalNavi.slideToggle('fast', function() {
			$(this).toggleClass('active').css({ display : '' });
			$('.navigation').css({
				top: 0
			});
		});

	});

	// ページTOP戻るbtn
	var topBtn = $('.left-arrow');
	//スクロールしてトップ
	topBtn.click(function () {
		$('body, html').animate({
			scrollTop: 0
		},	1000);
		return false;
	});


	// ページ内スクロール.
	// aタグかつhref属性が '#' で始まっている要素を対象とする.
	$(document).on('click', 'a[href^="#"]', function (ev) {
		var target = $(this).attr('href');
		if (!$(target).length) {
			return true;
		}

		ev.preventDefault();

		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 250);
	});


	// メインビジュアルランダム実装
	var array = [
	"../img/mv/01.jpg"
	];

	var l = array.length;
	var r = Math.floor(Math.random()*l);
	var imgurl = array[r];
	$("img#randomimg").attr({"src":imgurl});

});