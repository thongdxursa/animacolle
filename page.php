<?php get_header(); ?>
<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<?php if($slug == 'product'): ?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/images/product/titleImage_<?php echo $slug; ?>.jpg" alt="Catroad+の特徴"><strong>Catroad+の特徴</strong></h2>
<?php elseif($slug == 'setup'): ?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/images/product/titleImage_<?php echo $slug; ?>.jpg" alt="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></h2>
<?php elseif(!$slug == 'news_list'): ?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/titleImage_<?php echo $slug; ?>.jpg" alt="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></h2>
<?php endif; ?>
	<?php if ( !is_front_page() ) : ?>		
		<?php get_template_part('inc/bread_clumb'); ?>
	<?php endif; ?>	

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>


<?php
    endwhile;
    endif;
    wp_reset_postdata();
?>


<?php get_footer(); ?>