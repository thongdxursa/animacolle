<?php get_header(); ?>

<!-- carousel top -->
<div class="carousel_panel">
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
              <a href="#">
                <picture>
                  <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/cat_step_xs.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg.png" width="100%" />
                </picture>
              </a>
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
              <a href="#">
                <picture>
                  <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/supplement_xs.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg1.png" width="100%" />
                </picture>
              </a>
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
        </div>
      </div>
    <!-- item 2 -->
    <div class="item">
        <div class="item_content">
          <div class="content_img">
            <div class="img_1">
              <a href="#">
                <picture>
                  <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/cat_step_xs.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg.png" width="100%" />
                </picture>
              </a>
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
              <a href="#">
                <picture>
                  <source media="(max-width:1080px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/supplement_xs.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/bg1.png" width="100%" />
                </picture>
              </a>
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
  <div class="content_txt is_show_md">
    <h2>愛猫・愛⽝を「外と内」からみまもる</h2>
    <p>飼い主は「愛猫・愛⽝にできるだけのことをしてあげたい」と考えるものですが、<br>
        その多くは⾷事と運動に関係する事が多くあります。<br>
        愛猫・愛犬の健康をみまもり、長いライフスタイルを幸せなものにしませんか。
    </p>
  </div>
  <div class="content_txt is_show_xs">
    <h2>愛猫・愛⽝を<br>「外と内」からみまもる</h2>
    <p>飼い主は<br>「愛猫・愛⽝にできるだけのことをしてあげたい」と<br>
    考えるものですが、その多くは⾷事と運動に<br>
    関係する事が多くあります。<br>
        愛猫・愛犬の健康をみまもり、長いライフスタイルを<br>幸せなものにしませんか。
    </p>
  </div>
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
            <picture>
              <source media="(max-width:991px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/tab1_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab1.png"/>
            </picture>
            Catroad+の特徴
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product_list">
            <picture>
              <source media="(max-width:991px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/tab2_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab2.png"/>
            </picture>
            製品⼀覧
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product/setup">
            <picture>
              <source media="(max-width:991px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/tab3_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab3.png"/>
            </picture>
            取付⽅法
          </a>
          <a href="<?php echo esc_url(home('/')); ?>product_case">
            <picture>
              <source media="(max-width:991px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/tab4_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab4.png"/>
            </picture>
            事例紹介
          </a>
          <a href="<?php echo esc_url(home('/')); ?>voice">
            <picture>
              <source media="(max-width:991px)" srcset="<?php echo get_template_directory_uri(); ?>/images/topPage/tab5_xs.png">
              <img src="<?php echo get_template_directory_uri(); ?>/images/topPage/tab5.png"/>
            </picture>
            モニター様の声
          </a>
        </div>
      </div>
      <div id="menu2" class="tab-pane fade tab_content_2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
        <div class="tt">
          <h2>ソラサナカテゴリー</h2>
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
<!-- product story -->
<div class="product_story_panel">
  <div class="product_story_content">
    <div class="ps_title">
      <h2 class="ja">製品ストーリー</h2>
      <p class="en">ITEM STORY</p>
    </div>
    <div class="ps_video">
      <iframe src="https://www.youtube.com/embed/zGTsRzOKpkI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="desc">
      <p class="txt is_show_md">
        ソラサナは日々の診療を通じペットとそのご家族と向き合う中で、”こんなサプリメントがあったら良いのに”という強い思いからから誕生しました。<br>
        オメガ3脂肪酸として高品質なDHAを豊富に含むAlgatrium、皮膚の健康維持にアスタキサンチン、腸内環境に配慮したオリゴ乳酸を配合。<br>
        大切な家族であるペット達が様々なライフステージや状況でも安心してご利用いただけ、健康維持をサポートするソラサナを是非お試しください。
      </p>
      <p class="txt is_show_xs" >
        ソラサナは日々の診療を通じペットとそのご家族と向き合う中で、”こんなサプリメントがあったら良いのに”という強い思いからから誕生しました。
        オメガ3脂肪酸として高品質なDHAを豊富に含むAlgatrium、皮膚の健康維持にアスタキサンチン、腸内環境に配慮したオリゴ乳酸を配合。
        大切な家族であるペット達が様々なライフステージや状況でも安心してご利用いただけ、健康維持をサポートするソラサナを是非お試しください。
      </p>
      <div class="btn_more">
        <a href="#">MORE</a>
      </div>
    </div>
  </div>

</div>
<!-- end product story -->
<!-- pick up items -->
<div class="pick_up_item_panel">
  <div class="pick_up_item_content">
    <div class="ps_title">
      <h2 class="ja">ピックアップ商品</h2>
      <p class="en">PICK UP ITEMS</p>
    </div>
    <div class="desc is_show_md">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
      テキストが入ります。テキストが入ります。テキストが入ります。 <br>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="desc is_show_xs">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      テキストが入ります。テキストが入ります。テキストが入ります。 
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="list_items_product">
      <section class="imageText2">
        <div class="flexBox">
          <?php 
            $args2 = Array(
              'post_type' => 'product_list',
              'posts_per_page' => 2,
              'order' => 'ASC'
            );
            $wp_query2 = new WP_Query( $args2 );
          ?>
          <?php if ($wp_query2->have_posts() ) : while ($wp_query2->have_posts()) : $wp_query2->the_post(); $slug_name = $post->post_name; ?>
              <article class="specBox"><span id="<?php echo $slug_name; ?>"></span>
                <a href="<?php the_permalink(); ?>" ><img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>"/></a>
                <h3 class="title" style="text-align:center !important"><a href="<?php the_permalink(); ?>" ><?php the_title() ; ?></a></h3>
                <?php remove_filter ('the_content', 'wpautop'); ?>
                      <div class="specBox_footer" data-mh="specBox_footer">
                        <?php if(get_post_meta($post->ID,'link_rakuten',true) || get_post_meta($post->ID,'link_amazon',true) || get_post_meta($post->ID,'link_paypay',true)): ?>
                        <ul class="ecLink">
                          <!-- <li class="ecLink_item ecLink_item__rakuten"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_insta.png" alt="instagram"></a></li> -->
                          <?php if(get_post_meta($post->ID,'link_rakuten',true)): ?>
                          <li class="ecLink_item ecLink_item__rakuten"><a href="<?php echo $cfs->get('link_rakuten'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/rakuten.png" alt="Rakutenでの購入"></a></li>
                          <?php endif; ?>
                          <?php if(get_post_meta($post->ID,'link_amazon',true)): ?>
                          <li class="ecLink_item ecLink_item__amazon"><a href="<?php echo $cfs->get('link_amazon'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png" alt="amazonでの購入"></a></li>
                          <?php endif; ?>
                          <?php if(get_post_meta($post->ID,'link_paypay',true)): ?>
                          <li class="ecLink_item ecLink_item__paypay"><a href="<?php echo $cfs->get('link_paypay'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/p.png" alt="Paypayでの購入"></a></li>
                          <?php endif; ?>
                        </ul>
                          <?php endif; ?>
                        <?php if(get_post_meta($post->ID,'product_note',true)): ?>
                          <p class="productNote"><?php echo $cfs->get('product_note'); ?></p>
                        <?php endif; ?>
                      </div>
                    </article>
              <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </section>
    </div>
    
  </div>
</div>
<!-- end pick up items -->
<!-- popular items -->
<div class="popular_item_panel">
  <div class="popular_item_content">
    <div class="ps_title">
      <h2 class="ja">⼈気の商品</h2>
      <p class="en">POPULAR ITEMS</p>
    </div>
    <div class="desc is_show_md">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
      テキストが入ります。テキストが入ります。テキストが入ります。 <br>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="desc is_show_xs">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      テキストが入ります。テキストが入ります。テキストが入ります。 
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="list_items_product">
      <section class="imageText2">
        <div class="flexBox">
          <?php 
            $args3 = Array(
              'post_type' => 'product_list',
              'posts_per_page' => 3,
              'meta_key' => 'wp_post_views_count',
              'order' => 'ASC'
            );
            $wp_query3 = new WP_Query( $args3 );
          ?>
          <?php if ($wp_query3->have_posts() ) : while ($wp_query3->have_posts()) : $wp_query3->the_post(); $slug_name = $post->post_name; ?>
          <article class="specBox"><span id="<?php echo $slug_name; ?>"></span>
            <a href="<?php the_permalink(); ?>" ><img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>"/></a>
            <h3 class="title"><a href="<?php the_permalink(); ?>" ><?php the_title() ; ?></a></h3>
            <div class="product_price"><?php echo $cfs->get('product_price'); ?>円(税込)</div>
          </article>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
        <div class="btnMoreBox">
          <a href="" class="btn_more">MORE</a>
        </div>
      </section>
    </div>
    
  </div>
</div>
<!-- end popular items -->
<!-- for beginners -->
<div class="for_beginner_panel ">
  <div class="for_beginner_content">
    <div class="ps_title">
      <h2 class="ja">初めての方におすすめの商品</h2>
      <p class="en">FOR BEGINNERS</p>
    </div>
    <div class="desc is_show_md">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
      テキストが入ります。テキストが入ります。テキストが入ります。 <br>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="desc is_show_xs">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      テキストが入ります。テキストが入ります。テキストが入ります。 
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
  </div>
 
  <!-- product -->
  <div class="pick_up_item_content">
    
    <div class="list_items_product">
      <section class="imageText2">
        <div class="flexBox">
          <?php 
            $args2 = Array(
              'post_type' => 'product_list',
              'posts_per_page' => 2,
              'order' => 'ASC'
            );
            $wp_query2 = new WP_Query( $args2 );
          ?>
          <?php if ($wp_query2->have_posts() ) : while ($wp_query2->have_posts()) : $wp_query2->the_post(); $slug_name = $post->post_name; ?>
          <article class="specBox"><span id="<?php echo $slug_name; ?>"></span>
            <a href="<?php the_permalink(); ?>" ><img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>"/></a>
            <h3 class="title"><a href="<?php the_permalink(); ?>" ><?php the_title() ; ?></a></h3>
            <div class="product_price"><?php echo $cfs->get('product_price'); ?>円(税込)</div>
          </article>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </section>
    </div>
  </div>
  <!-- popular -->
  <div class="popular_item_content">
    <div class="list_items_product">
      <section class="imageText2">
        <div class="flexBox">
          <?php 
            $args3 = Array(
              'post_type' => 'product_list',
              'posts_per_page' => 3,
              'meta_key' => 'wp_post_views_count',
              'order' => 'ASC'
            );
            $wp_query3 = new WP_Query( $args3 );
          ?>
          <?php if ($wp_query3->have_posts() ) : while ($wp_query3->have_posts()) : $wp_query3->the_post(); $slug_name = $post->post_name; ?>
          <article class="specBox"><span id="<?php echo $slug_name; ?>"></span>
            <?php if (has_post_thumbnail()) : ?>
              <figure class="alignwide">
                  <?php the_post_thumbnail('popular_thumb'); ?>
              </figure>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" ><img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>"/></a>
            <h3 class="title"><a href="<?php the_permalink(); ?>" ><?php the_title() ; ?></a></h3>
            <div class="product_price"><?php echo $cfs->get('product_price'); ?>円(税込)</div>
          </article>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
        <div class="btnMoreBox">
          <a href="" class="btn_more">MORE</a>
        </div>
      </section>
    </div>
  
  </div>
</div>
<!-- end for beginners -->
<!-- news -->
<div class="news_panel">
  <div class="news_content">
    <div class="ps_title">
      <h2 class="ja">おしらせ</h2>
      <p class="en">NEWS</p>
    </div>
    <div class="desc is_show_md">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
      テキストが入ります。テキストが入ります。テキストが入ります。 <br>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="desc is_show_xs">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      テキストが入ります。テキストが入ります。テキストが入ります。 
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </div>
    <div class="list_items_news">
      <section class="imageText2">
        <div class="flexBox">
          <?php 
            $args3 = Array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'order' => 'ASC'
            );
            $wp_query3 = new WP_Query( $args3 );
          ?>
          <?php if ($wp_query3->have_posts() ) : while ($wp_query3->have_posts()) : $wp_query3->the_post(); $slug_name = $post->post_name; ?>
          <article class="specBox">
            <a href="<?php the_permalink(); ?>" >
              <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail(); ?>
              <?php }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_default.png" alt="<?php the_title(); ?>"/>
              <?php } ?>
            </a>
            <a href="<?php the_permalink(); ?>" class="link_post_item">
              <time><?php the_time('Y.m.j'); ?></time><br>
              <span class="title"><?php the_title(); ?></span>
              <div class="content is_show_md">
                <?php echo the_content();?>  
              </div>
            </a>
          </article>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
        <div class="btnMoreBox">
          <a href="" class="btn_more">MORE</a>
        </div>
      </section>
    </div>
    
  </div>
</div>
<!-- end news -->


<?php get_footer(); ?>
