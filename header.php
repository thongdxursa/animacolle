<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KHBWK3D');</script>
<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <?php if(is_page('catbed')): ?>
    <title>キャットロードプラス｜キャットベッド</title>
  <?php elseif(is_page('solusana_sale') || is_page( 'solusana_thanks' )): ?>
    <title>solusanaソラサナ｜販売ページ</title>
    <meta name="description" content="アニマコレから登場したペットサプリメント「solusanaソラサナ」を、公式サイト限定のお得なまとめ買いプランでお申し込みいただけます。">
    <meta name="Keywords" content="ペットサプリメント,ペットサプリ,国産,猫,ネコ,犬,中西金属工業株式会社">
  <?php elseif(is_page('solusana60')): ?>
    <title>solusanaソラサナ｜製品情報</title>
    <meta name="description" content="アニマコレから登場したペットサプリメント「solusanaソラサナ」大切な家族の健康維持と未来のためにサプリメントによる日々の健康管理を。犬、猫どちらも全年齢にご利用いただけます。">
    <meta name="Keywords" content="ペットサプリメント,ペットサプリ,国産,猫,ネコ,犬,中西金属工業株式会社">
  <?php else: ?>
    <title>キャットロードプラス｜大切な猫ちゃんのために。簡単に取付けられるキャットロード</title>
    <meta name="description" content="～アニマコレ～お客様とねこちゃんの暮らしにキャットウォークというアクセント。賃貸住宅でも石膏ボードなら簡単に取付け、取外し可能です。愛猫の可愛い姿や肉球が更に身近に…">
    <meta name="Keywords" content="キャットロード,キャットタワー,cat,road,猫,ネコ,賃貸,簡単,後付け,中西金属工業株式会社">
    <meta name="facebook-domain-verification" content="tjktzbx0ycn2bx83ksf7og5esy2nf8" />
  <?php endif; ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom_page.css">

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lightslider/lightslider.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dc_animacolle.css">
    
    <?php if(is_page( '11' )): ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/review.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/review_sp.css" />
    <?php elseif(is_page( 'catbed' )): ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/catbed.css" />
    <?php elseif(is_page( 'solusana60' )): ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/solusana.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/solusana_sp.css" />
    <?php endif; ?>
    
  <?php if(is_page('solusana_sale') || is_page( 'solusana_thanks' )): ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap&text=0123456789," rel="stylesheet">
  <?php else: ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <?php endif; ?>
	<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />

	
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <?php if(!(is_page('solusana_sale')  || is_page( 'solusana_thanks' ))): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
<?php if( is_post_type_archive( 'product_list' )): ?>	
    <link rel="stylesheet" href="../magnific-popup/dist/magnific-popup.css"> 

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/magnific-popup/magnific-popup.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>
    jQuery(function($){
        $('.popup-image').magnificPopup({ 
            type: 'image'
            // その他のオプション（必要であれば）
        });
    });
</script>	
<?php endif; ?>
<?php if( is_page( 'solusana60' )): ?>
  <script>
    jQuery(function($){
    jQuery(window).load(function () {
      var urlHash = location.hash; 
      if(urlHash && urlHash=='#faq' && jQuery(window).width() < 768) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            var target = $("#faq_sp");
            var position = target.offset().top;
            $('body,html').stop().animate({scrollTop:position}, 0, 'swing');
        }, 100);
      }
    });
  });
  </script>	
<?php endif; ?> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider/lightslider.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script>
  jQuery(function($){
      $.each($.fn.matchHeight._groups, function() {
          this.options.byRow = false;
      });
  });
</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/dc_animacolle.js"></script>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>

	<style type="text/css">
	</style>
   <?php endif; ?>
<?php wp_head(); ?>
</head>

<body<?php if (is_home()||is_front_page() ): ?> class="top"<?php endif; ?> data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHBWK3D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->   
    <style type="text/css">
        @media screen and (min-width: 1150px){
        #fixed_bnr{display: block}
        }
        @media (max-width: 1149px) {
        #fixed_bnr{display:none}
        }
        #fixed_bnr {
             position: fixed;
             top:180px;
             left: 0;
             width: 160px;
             z-index: 200;
            }
            #fixed_bnr p.bnr_review{
                margin: 0 0 10px 0;
            }
            #fixed_bnr p.bnr_review:hover {
             left: 0;
            }
            #fixed_bnr .bnr_review a {
             background: url("<?php echo get_template_directory_uri(); ?>/images/review.png") left 0 no-repeat;
             display: block;
             height:218px;
             text-indent: 100%;
             white-space: nowrap;
             overflow: hidden;
             transition: all .0.1s ease;
            }
            #fixed_bnr .bnr_review a:hover {
                transition: all 10ms 0s ease;
            }

            #fixed_bnr .bnr_review a:hover {
             background: url("<?php echo get_template_directory_uri(); ?>/images/review_hover.png") left 0 no-repeat;
             display: block;
             width: 160px;
             height:218px;
            }
            /*20210616_menu*/
            .menu_solusana{
                width: 250px;
            }
    </style>
    <div id="fixed_bnr" class="pc">
           <p class="bnr_review"><a href="<?php echo esc_url(home('/')); ?>voice/">モニター様の声はこちら</a></p>
    </div>

<header>
  <div class="header_content" id="header_content">
    <div class="sns">
      <a href="https://www.instagram.com/animacolle/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_insta.png" alt="Instragram" /></a>
      <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/LINE.png" alt="Line" /></a>
      <a href="https://twitter.com/animacolle" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.png" alt="twitter" /></a>
    </div>
    <div class="header_logo">
      <a href="<?php echo esc_url(home('/')); ?>" title="キャットロードプラスのTOPページへ" class="shop_logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_header.png" alt="animacolle" />
      </a>
    </div>
    <nav class="header_nav">
      <ul class="list_item_nav">
        <li>
          <img class="menuIconSubMenu" src="<?php echo get_template_directory_uri(); ?>/images/menuIconSubMenu_2.png" /><a href="javascript:;">キャットステップ</a>
          <ul>
            <li><a href="<?php echo esc_url(home('/')); ?>product">Catroad+の特徴</a></li>
            <li><a href="<?php echo esc_url(home('/')); ?>product_list">製品一覧</a></li>
            <li><a href="<?php echo esc_url(home('/')); ?>product/setup">取付方法</a></li>
            <li><a href="<?php echo esc_url(home('/')); ?>product_case">事例紹介</a></li>
          </ul>
        </li>
        <li>
          <img class="menuIconSubMenu" src="<?php echo get_template_directory_uri(); ?>/images/menuIconSubMenu_2.png"  /><a href="javascript:;">サプリメント</a>
          <ul class="menu_solusana">
            <li><a href="<?php echo esc_url(home('/')); ?>solusana60/">ペット用サプリメント solusana</a></li>
            <li><a href="<?php echo esc_url(home('/')); ?>solusana_sale/">solusana販売ページ</a></li>
          </ul>
        </li>
        <li><a href="#"><i class='fas fa-search'></i></a></li>
      </ul>
    </nav>
  </div>
  <div class="header_link_2">
    <a href="#">キャットステップ</a>
    <a href="#">サプリメント</a>
  </div>
</header>

