<?php get_header(); ?>

<!-- carousel top -->
<div id="topCarousel" class="carousel slide topCarousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#topCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#topCarousel" data-slide-to="1"></li>
    <!-- <li data-target="#topCarousel" data-slide-to="2"></li> -->
  </ol>

  <div class="carousel-inner">
    <!-- item 1 -->
    <div class="item active">
      <div class="item_content">
        <div class="content_img">
          <div class="img_1">
            <picture>
              <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/cat_step_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg.png" width="100%" />
            </picture>
            <div class="logo_btn logo_btn_cat_step">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ベクトルスマートオブジェクト1.png" width="100%"/>
              </div>
              <div class="link">
                <a href="#" class="link cat_step">キャットステップ</a>
              </div>
            </div>
          </div>
          <div class="img_2">
            <picture>
              <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/supplement_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg1.png" width="100%" />
            </picture>
            <div class="logo_btn logo_btn_supplement">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="100%"  />
              </div>
              <div class="link">
                <a href="#" class=" supplement">サプリメント</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content_txt">
          <h2>愛猫・愛⽝を「外と内」からみまもる</h2>
          <p>飼い主は「愛猫・愛⽝にできるだけのことをしてあげたい」と考えるものですが、<br>
             その多くは⾷事と運動に関係する事が多くあります。<br>
             psd error </p>
        </div>
      </div>
    </div>
   <!-- item 2 -->
   <div class="item">
      <div class="item_content">
        <div class="content_img">
          <div class="img_1">
            <picture>
              <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/cat_step_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg.png" width="100%" />
            </picture>
            <div class="logo_btn logo_btn_cat_step">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ベクトルスマートオブジェクト1.png" width="100%"/>
              </div>
              <div class="link">
                <a href="#" class="link cat_step">キャットステップ</a>
              </div>
            </div>
          </div>
          <div class="img_2">
            <picture>
              <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/supplement_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg1.png" width="100%" />
            </picture>
            <div class="logo_btn logo_btn_supplement">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="100%"  />
              </div>
              <div class="link">
                <a href="#" class=" supplement">サプリメント</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content_txt">
          <h2>愛猫・愛⽝を「外と内」からみまもる</h2>
          <p>飼い主は「愛猫・愛⽝にできるだけのことをしてあげたい」と考えるものですが、<br>
             その多くは⾷事と運動に関係する事が多くあります。<br>
             psd error </p>
        </div>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#topCarousel" data-slide="prev">
    <img src="<?php echo get_template_directory_uri(); ?>/images/left.png">
  </a>
  <a class="right carousel-control" href="#topCarousel" data-slide="next">
  <img src="<?php echo get_template_directory_uri(); ?>/images/right.png">
  </a>
</div>
<!-- end carousel top -->
<!-- tab panel -->

<div class="tab_panel">
  <div class="tab_content">
    <ul class="nav nav-tabs">
      <li class="active">
        <a data-toggle="tab" href="#menu1" class="title_tab_item title_tab_item_1 ">
          キャットステップ 
          <img src="<?php echo get_template_directory_uri(); ?>/images/ベクトルスマートオブジェクト1.png" width="100%"/>
        </a>
      </li>
      <li>
        <a data-toggle="tab" href="#menu2" class="title_tab_item title_tab_item_2">
          サプリメント
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="100%"/>
        </a>
      </li>
    </ul>
  
    <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active tab_content_1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ベクトルスマートオブジェクト1.png"/>
        <div class="tt">
          <h2>キャットステップカテゴリー</h2>
          <p>CATEGORY</p>
        </div>
        <div class="list_category">
          <a href="<?php echo esc_url(home('/')); ?>product">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab1.png"/>
            Catroad+の特徴
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product_list">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab2.png"/>
            製品⼀覧
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product/setup">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab3.png"/>
            取付⽅法
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product_case">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab4.png"/>
            事例紹介
          </a>
          <a href="<?php echo esc_url(home('/')); ?>voice">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab5.png"/>
            モニター様の声
          </a>
        </div>
      </div>
      <div id="menu2" class="tab-pane fade tab_content_2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
        <div class="tt">
          <h2>キャットステップカテゴリー</h2>
          <p>CATEGORY</p>
        </div>
        <div class="list_category">
          <a href="<?php echo esc_url(home('/')); ?>solusana60">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab1.png"/>
            ペット用サプリメント solusana
          </a>
          <a href="<?php echo esc_url(home('/')); ?>solusana_sale">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab2.png"/>
            solusana販売ページ
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end tab panel -->
<style type="text/css">
 @media screen and (min-width: 1150px) {
  .content_review {
   display: none
  }
 }

 @media (max-width: 1149px) {
  .content_review {
   display: block;
   margin: 5% auto;
   width: 86%;
  }
  .content_review img {
   width: 100%;
  }
 }

 @media (max-width: 767px) {
  .content_review {
   width: 92%;
  }
 }
</style>


<p class="readComment">
～大切な家族の、アクティブな未来のために。～<br>animacolleからペットサプリメントのご紹介▼
	
	<!--くつろぎと<ruby><rb>興奮</rb><rt>ワクワク</rt></ruby>を あなたと<br class="sp">大切なネコちゃんへ<br>サクッと気軽に猫壁デザイン！--></p>

<p class="readComment">
 <iframe width="560" height="315" src="https://www.youtube.com/embed/zGTsRzOKpkI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</p>

<section class="imageText slideshow">
 <h2><img src="<?php echo get_template_directory_uri(); ?>/images/catShadowIcon01.png" alt="キャットロードプラスの特徴">Catroad+ の特徴</h2>
 <article>
  <div class="linkBox text">
   <h3>DIY感覚で簡単な取付け</h3>
   <p>Catroad+は、は特別な工具を使用せず、石膏ボードに施工できるキャットステップです。<br>穴の大きさは画びょう程度で、ビスに比べて壁へのダメージが少ないため、賃貸にお住まいの方にもおすすめです。</p>
   <a href="<?php echo esc_url(home('/')); ?>product">取付方法の詳細はこちら</a>
  </div>
  <div class="slideShow">
   <ul>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow01.jpg" alt="お部屋のインテリアに イメージ1"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow03.jpg" alt="お部屋のインテリアに イメージ2"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow05.jpg" alt="お部屋のインテリアに イメージ3"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow07.jpg" alt="お部屋のインテリアに イメージ4"></li>
   </ul>
  </div>
 </article>
 <article>
  <div class="linkBox text">
   <h3>レイアウトは自由！</h3>
   <p>金具を固定すれば、ステップの取付け、取外しはワンタッチで簡単にできます。<br>壁面のデザインをその日の気分に合わせていつでも変更でき、さらに、金具はステップの上部にも下部にも取付けられるため、低い場所にも、ネコちゃんが好む高い場所にも取付けることができます。</p>
   <a href="<?php echo esc_url(home('/')); ?>product">ステップ設置例はこちら</a>
  </div>
  <div class="slideShow">
   <ul>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow02.jpg" alt="ネコちゃんにやさしい イメージ1"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow04.jpg" alt="ネコちゃんにやさしい イメージ2"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow06.jpg" alt="ネコちゃんにやさしい イメージ3"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/topPage/slideShow08.jpg" alt="ネコちゃんにやさしい イメージ4"></li>
   </ul>
  </div>
 </article>
</section>


<section class="whatsNew"><span id="news"></span>
 <h2><img src="<?php echo get_template_directory_uri(); ?>/images/catShadowIcon02.png" alt="お知らせ">お知らせ</h2>
 <article>
  <?php $args1 = Array(
        'post_type' => 'post',
        'posts_per_page' => 3
);
$wp_query1 = new WP_Query( $args1 );
if ( $wp_query1->have_posts() ) {
    while ( $wp_query1->have_posts() ) {
        $wp_query1->the_post();?>
  <p><time><?php the_time('Y.m.j'); ?></time><span><?php remove_filter ('the_content', 'wpautop'); ?><?php the_title(); the_content(); ?></span>
   <?php if (has_post_thumbnail()) { ?>
   <a href="<?php echo $cfs->get('url_post'); ?>" target="_blank">
    <?php the_post_thumbnail(); ?>
   </a>
   <?php } ?>
  </p>
  <?php 
	}
}
wp_reset_postdata();
?>
  <div class="newsLinkBox"><a href="<?php echo esc_url(home('/')); ?>news_list">お知らせ一覧</a></div>
 </article>
</section>

<section class="imageText2">
 <h2><img src="<?php echo get_template_directory_uri(); ?>/images/catShadowIcon03.png" alt="製品一覧">製品一覧</h2>
 <div class="flexBox">
  <?php $args2 = Array(
        'post_type' => 'product_list',
        'posts_per_page' => -1,
		'order' => 'ASC'
);
$wp_query2 = new WP_Query( $args2 );
if ( $wp_query2->have_posts() ) {
    while ( $wp_query2->have_posts() ) {
        $wp_query2->the_post();
		$slug_name = $post->post_name;?>
  <article class="linkBox">
   <img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>" />
   <h3>
    <?php the_title(); ?>
   </h3>
   <div>
    <?php the_excerpt(); ?>
   </div>
   <a href="<?php echo esc_url(home('/')); ?>product_list#<?php echo $slug_name; ?>">詳しくはこちら</a>
  </article>
  <?php 
	}
}
wp_reset_postdata();
?>
 </div>
</section>

<section class="imageText case">
 <h2><img src="<?php echo get_template_directory_uri(); ?>/images/catShadowIcon04.png" alt="取付方法">取付方法</h2>
 <article>
  <div class="linkBox text">
   <h3>取付けは簡単</h3>
   <p>特別な工具は不要。おひとりで取付けが可能です。<br>ひとつのステップは15分（目安）で取付け完了。
	   高い位置に取付ける時もラクラクです。</p><br>
   <iframe width="520" height="315" src="https://www.youtube.com/embed/3FIyjPLdfQE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
   <a href="<?php echo esc_url(home('/')); ?>product/setup">詳しくはこちら</a><br>
  </div>
 </article>
</section>

<section class="imageText3">
 <h2><img src="<?php echo get_template_directory_uri(); ?>/images/catShadowIcon05.png" alt="事例紹介">事例紹介</h2>
 <article>
  <div class="linkBox text">
   <p>取付事例などを紹介します</p>
   <a href="<?php echo esc_url(home('/')); ?>product_case">詳しくはこちら</a>
  </div>
  <?php /*
      <div class="snsArea">
        <div class="snsArea_heading">
          <p class="snsArea_lead">Instagramでも実際にご使用いただいている画像を多数ご紹介しています</p>
          <p><a href="https://www.instagram.com/animacolle/" target="_blank" class="btn_link">Instagramを見る</a></p>
        </div>
        <div class="elfsight-app-3ebfda0a-1e60-4915-999e-e8035171ed34"></div>
      </div>
      */ ?>
  <?php /*
			<div class="linkBox image">
				<img src="<?php echo get_template_directory_uri(); ?>/images/topRoomImage.jpg" alt="キャットロードプラス"><a href="<?php echo esc_url(home('/')); ?>product_case">for more Information...</a>
  </div>
  */?>
  <ul class="topBtnList">
   <li><a href="/contact/">お問い合わせ</a></li>
   <li><a href="https://www.rakuten.ne.jp/gold/animacolle/" target="_blank">ご購入はこちら</a></li>
  </ul>
 </article>
</section>


<?php get_footer(); ?>
