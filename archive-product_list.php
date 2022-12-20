<?php get_header(); ?>

<h2><img src="<?php echo get_template_directory_uri(); ?>/images/product/titleImage_list.jpg" alt="製品一覧"><strong>製品一覧</strong></h2>
	<?php if ( !is_front_page() ) : ?>		
		<?php //get_template_part('inc/bread_clumb'); ?>
	<?php endif; ?>	
<p class="readComment">美しく機能的なデザインと<br>厳しい品質基準をクリアした安心設計</p>
	
	<section class="imageText2">
		<div class="flexBox">
	<?php query_posts('post_type=product_list&order=ASC&post_per_page=-1'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();
		$slug_name = $post->post_name;
			?>
			<article class="specBox"><span id="<?php echo $slug_name; ?>"></span>
				<img src="<?php echo $cfs->get('image_product'); ?>" width="340" alt="<?php the_title(); ?>"/>
				<h3><?php the_title() ; ?></h3>
	<?php remove_filter ('the_content', 'wpautop'); ?>
        <div class="productDesc" data-mh="productDesc"><?php the_content(); ?></div>
        <div class="specBox_footer" data-mh="specBox_footer">
          <table>
            <caption><a href="<?php echo $cfs->get('image_ specification'); ?>" class="popup-image" title="" >仕様</a>　<a href="<?php echo $cfs->get('pdf_specification'); ?>" target="_blank" title="<?php the_title() ; ?>">取扱説明書(PDF)</a><?php if(get_post_meta($post->ID,'pdf_assemble',true)): ?>　<a href="<?php echo $cfs->get('pdf_assemble'); ?>" target="_blank" title="組み立て方">組み立て方(PDF)</a><?php endif; ?><?php if(get_post_meta($post->ID,'pdf_attention',true)): ?>　<a href="<?php echo $cfs->get('pdf_attention'); ?>" target="_blank" title="注意点">注意点(PDF)</a><?php endif; ?></caption>
          </table>
          <?php if(get_post_meta($post->ID,'product_price',true)): ?>
          <div class="productPriceBox"><span class="productPriceTxt"><?php echo $cfs->get('product_price'); ?>円(税込)</span></div>
          <?php endif; ?>
          <?php if(get_post_meta($post->ID,'link_rakuten',true) || get_post_meta($post->ID,'link_amazon',true) || get_post_meta($post->ID,'link_paypay',true)): ?>
          <ul class="ecLink">
            <?php if(get_post_meta($post->ID,'link_rakuten',true)): ?>
            <li class="ecLink_item ecLink_item__rakuten"><a href="<?php echo $cfs->get('link_rakuten'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconRakuten.png" alt="Rakutenでの購入"></a></li>
            <?php endif; ?>
            <?php if(get_post_meta($post->ID,'link_amazon',true)): ?>
            <li class="ecLink_item ecLink_item__amazon"><a href="<?php echo $cfs->get('link_amazon'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconAmazon.png" alt="amazonでの購入"></a></li>
            <?php endif; ?>
            <?php if(get_post_meta($post->ID,'link_paypay',true)): ?>
            <li class="ecLink_item ecLink_item__paypay"><a href="<?php echo $cfs->get('link_paypay'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconPaypay.png" alt="Paypayでの購入"></a></li>
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

<?php get_footer(); ?>