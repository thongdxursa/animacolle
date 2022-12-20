<?php if(!is_home()): ?>
	<nav id="pankuzu">
		<a href="<?php echo esc_url(home('/')); ?>">ホーム</a>&gt;
		<?php if(is_404()): ?>
			<span>404 Not found</span>
		<?php elseif(is_date()):  /* アーカイブ */?>
			<a href="<?php echo esc_url(home('/')); ?>news">お知らせ</a>&gt;
			<?php if(is_day()): ?>
				<a href="<?php echo get_month_link(get_query_var('monthnum'), get_query_var('monthnum')); ?>">
					<?php echo get_query_var('year'); ?>年
					<?php echo get_query_var('monthnum'); ?>月</a>&gt;
				<span><?php echo get_query_var('day'); ?>日</span>
			<?php elseif(is_month()): ?>
					<span><?php echo get_query_var('year'); ?>年
					<?php echo get_query_var('monthnum'); ?>月</span>
			<?php elseif(is_year()): ?>
				<span><?php echo get_query_var('year'); ?>年</span>
			<?php endif; ?>
		<?php elseif(is_page()): /* 固定ページ */?>
			<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?>
				<a href="<?php echo get_page_link( $parid );?>" title="<?php echo get_page($parid)->post_title; ?>"><?php echo get_page($parid)->post_title; ?></a>&gt;
			<?php } ?>
				<span><?php the_title(''); ?></span>
		<?php elseif(is_singular('post')): /* ブログ記事 */?>
			<a href="<?php echo esc_url(home('/')); ?>news">お知らせ</a>&gt;
			<a href="<?php echo get_year_link( $year ); ?>"><?php echo get_the_date('Y'); ?>年</a>&gt;
			<a href="<?php echo get_month_link(get_query_var('monthnum'), get_query_var('monthnum')); ?>"><?php echo get_query_var('monthnum'); ?>月</a>&gt;
			<?php echo $post -> post_title; ?>
		<?php elseif( is_post_type_archive( 'product_list' ) || is_post_type_archive( 'voice' ) || is_post_type_archive( 'product_case' )) : ?>
			<span><?php wp_title('', true); ?></span>
		<?php else: ?>
			<span><?php wp_title('', true); ?></span>
		<?php endif; ?>
	</nav>
<?php endif; ?>