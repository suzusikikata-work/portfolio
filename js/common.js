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


jQuery(function($){
  var sp = 667;  //SPのサイズを設定
  
  function masonry_execute() {
    var $demo2 = $('#picture_box');    //コンテナとなる要素を指定
  
    if ( $('html').width() < sp ) {    //ウィンドウ幅が480px以下だった場合、masonry破棄 (無効)
      $demo2.masonry('destroy');
    } else {                              //ウィンドウ幅が480px以上だった場合、masonry適応
      $demo2.imagesLoaded(function(){
        $demo2.masonry({
	      itemSelector: '.item',  //コンテンツを指定
	      columnWidth: 0,    //カラム幅を設定
	      fitWidth: true,          //コンテンツ数に合わせ親の幅を自動調整
	      resize: true,
	      gutter:0,
        });
      });
    }
  }
  masonry_execute();  //masonry_execute関数を実行
  
  $(window).resize(function(){  //ウィンドウがリサイズされたら、再度masonry_execute関数を実行
    masonry_execute();
  });
});
