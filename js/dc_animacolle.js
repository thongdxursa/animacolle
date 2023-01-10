$(function (){
	
	var breakPoint = 1150;　//スマホとPCを切り替える画面サイズ
	var tpl_url = $('body').attr('data-tmpdir');
	//リサイズ時に処理
	(function () {
		var timer = 0;
		$(window).on('resize', function() {
			if (timer > 0) clearTimeout(timer);
				timer = setTimeout(function () {
				checkContents();
				scrollFollowContents();
			}, 50);
		});
	}());

	//メニューの処理
	var imagesPath = $('body').attr('data-tmpdir') + '/images/';
	$('header nav > ul > li a').on('mouseover', function(e){
		if( $(this).attr('href') == 'javascript:;' ) return;
		if( $(this).parent('li').attr('data-pageNow') != 'now' ) {
			$('header nav img.catIcon').fadeOut(150, function(){$(this).remove()});
			$(this).before('<img src="' + imagesPath + 'catTouch.gif?' + new Date().getTime() + '" class="catIcon">');
			$(this).prev('img').hide().fadeIn(150);
		};
	}).on('mouseout', function(e) {
		$('header nav img.catIcon').fadeOut(150, function(){
			$(this).remove();
			if(!$('header nav > ul > li:hover')[0]) showMenuIconNow();
		});
	});
	showMenuIconNow();
	function showMenuIconNow(){
		if(!$('header li[data-pageNow = "now"] img')[0]) {
			$('header li[data-pageNow = "now"]').prepend('<img src="' + imagesPath + 'menuIconNow.png">')
			.find('img').hide().fadeIn(50);
		}
	}
	$('#header_content').on('click', '#menuBtn', function() {
		if(!$('body').hasClass('spMenu')) {
			$('body').addClass('spMenu');
			$('.sp.spMenu header nav > ul').hide().fadeIn();
		} else {
			$('body').removeClass('spMenu');
		}
	});
	$('#closemenuBtn').on('click', function() {
		$('body').removeClass('spMenu');
	});

	//コンテンツのチェック
	 $('#header_content').append('<a href="javascript:;" id="menuBtn"><img src="./../images/3_line.png" /></a><hr />');
	$('footer').append('<hr />');
	checkContents();
	function checkContents() {
		if( $('html').width() >= breakPoint ) {
			$('body').removeClass('sp').addClass('pc');
		} else {
			$('body').removeClass('pc').addClass('sp');
		}
		$('header hr, footer hr').css('left', ( $('header').width() - $('header hr').width() ) / 2 + 'px' )
		$('#main').css('minHeight', $(window).innerHeight() - $('header').height() - $('footer').height() - ( $('nav#pankuzu')[0]? 143 : 111 ) + 'px' );
	}

	//スクロールに応じて表示するコンテンツ
	var goTopBtn = $('a#goTopBtn'), scrollTimeoutID;
	goTopBtn.click(function() { $('html, body').animate({ scrollTop: 0 }, 300, 'swing') });

	$(window).scroll(function(){
		if (scrollTimeoutID) return ;
		scrollTimeoutID = setTimeout( function () {
			scrollTimeoutID = 0 ;
			scrollFollowContents();
		}, 300 ) ;
	});

	scrollFollowContents();
	function scrollFollowContents() {
		if( $(window).scrollTop() > $('header').height() + ($('#pankuzu')[0]? $('#pankuzu').height() : 0) + 50 ) goTopBtn.fadeIn(500);
 		else goTopBtn.hide();

		var mainBox = $('#main');
		goTopBtn.css( {
			'left': $(window).width() > 1300? $('footer div').offset().left + 1170 + 'px' : $('body').width() - 60 + 'px',
			'bottom': $(window).scrollTop() > $('footer').offset().top - $(window).height()? $(window).scrollTop() + $(window).height() - $('footer').offset().top + ($(window).width() > breakPoint? 50: 20) + 'px' : '50px',
			'transition': 'all 300ms 0s ease'
		});

	}

	//topスライド用
	if( $('#topSlideShow ul')[0] ) {
		$('#topSlideShow ul').lightSlider({
			auto: true,
			pause: 7500,
			speed: 1000,
			item: 1,
			slideMargin: 0,
			loop: true,
			pager: false,
			pauseOnHover: true,
		});
	}

	//ページ中スライド用
	if( $('.slideShow ul')[0] ) {
		$('.slideShow ul').lightSlider({
			auto: true,
			pause: 10000,
			speed: 1000,
			item: 1,
			slideMargin: 1,
			loop: true,
			controls: true,
			pager: false,
			gallery:false,
			pauseOnHover: true
		});
	}

	//事例紹介用
	if( $('.caseSlideShow ul')[0] ) {
		$('.caseSlideShow ul').lightSlider({
			gallery:true,
			galleryMargin:0,
			thumbMargin: 5,
			item:1,
			auto: true,
			pause: 10000,
			speed: 1000,
			loop:true,
			thumbItem:5,
			slideMargin:0,
			controls: false,
			currentPagerPosition:'left',
			pauseOnHover: true
		});
	}

	//その他コンテンツの設定など

		//その他コンテンツの整形など
		$('.pc section.imageText:not(.case, .voice) article').each(function() {
			var textBox = $(this).find('.text');
			textBox.css('margin-top', ($(this).height() - textBox.height()) * 0.3 + 'px' );
		});


	$('section').on('click', '.linkBox', function() {
		window.location.href = $(this).find('a').attr('href');
	});

});
