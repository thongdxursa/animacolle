<?php get_header(); ?>
<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/images/product/titleImage_case.jpg" alt="事例紹介"><strong>事例紹介</strong></h2>
	<?php if ( !is_front_page() ) : ?>		
		<?php //get_template_part('inc/bread_clumb'); ?>
	<?php endif; ?>	

<section class="imageText case">
	<?php query_posts('post_type=product_case&order=ASC&post_per_page=-1'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article>
			<div class="text">
				<h3><span>事例 <?php echo $wp_query->current_post + 1; ?></span><?php the_title(); ?></h3>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>
			</div>
			<div class="caseSlideShow">
				<ul>
<?php
$fields = CFS()->get('images_case');
foreach ($fields as $field) { ?>
<li data-thumb="<?php echo $field['image_case']; ?>"><img src="<?php echo $field['image_case']; ?>"></li>
<?php }?>
					
									</ul>
			</div>
		</article>


<?php
    endwhile;
    endif;
    wp_reset_postdata();
?>
	</section>


<?php get_footer(); ?>