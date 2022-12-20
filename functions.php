<?php
//メディア

add_theme_support('post-thumbnails');
//add_image_size( 'recipe_detail', 750, 750, false );

function tpl_url() {
return get_stylesheet_directory_uri();
}
add_shortcode('tpl_url', 'tpl_url');

function home() {
return home_url( '/' );
}
add_shortcode('home', 'home');


//bodyクラス
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}
/* 投稿 ------------*/
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'お知らせ';
  $submenu['edit.php'][5][0] = 'お知らせ一覧';
  $submenu['edit.php'][10][0] = '新しいお知らせ';
  $submenu['edit.php'][16][0] = 'タグ';
}

function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'お知らせ';
  $labels->singular_name = 'お知らせ';
  $labels->add_new = _x('追加', 'お知らせ');
  $labels->add_new_item = 'お知らせの新規追加';
  $labels->edit_item = 'お知らせの編集';
  $labels->new_item = '新規お知らせ';
  $labels->view_item = 'お知らせを表示';
  $labels->search_items = 'お知らせを検索';
  $labels->not_found = '記事が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
/* カスタム投稿関連 ------------*/

// 商品情報
function register_cpt_product_list() {
    $labels = array(
        'name'               => _x( '商品情報', 'product_list' ),
        'singular_name'      => _x( '商品情報', 'product_list' ),
        'add_new'            => _x( '新規追加', 'product_list' ),
        'add_new_item'       => _x( '商品情報を追加', 'product_list' ),
        'edit_item'          => _x( '商品情報を編集', 'product_list' ),
        'new_item'           => _x( '商品情報を追加', 'product_list' ),
        'view_item'          => _x( '商品情報を見る', 'product_list' ),
        'search_items'       => _x( '商品情報検索', 'product_list' ),
        'not_found'          => _x( '商品情報はありません', 'product_list' ),
        'not_found_in_trash' => _x( 'ゴミ箱に商品情報はありません', 'product_list' ),
        'parent_item_colon'  => _x( '親 商品情報:', 'product_list' ),
        'menu_name'          => _x( '商品情報', 'product_list' ),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-format-aside',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt',),
        'has_archive'   => true,
        'exclude_from_search' => false
	);
    register_post_type( 'product_list', $args );
}
add_action( 'init', 'register_cpt_product_list' );

// 事例紹介
function register_cpt_product_case() {
    $labels = array(
        'name'               => _x( '事例紹介', 'product_case' ),
        'singular_name'      => _x( '事例紹介', 'product_case' ),
        'add_new'            => _x( '新規追加', 'product_case' ),
        'add_new_item'       => _x( '事例を追加', 'product_case' ),
        'edit_item'          => _x( '事例を編集', 'product_case' ),
        'new_item'           => _x( '事例を追加', 'product_case' ),
        'view_item'          => _x( '事例を見る', 'product_case' ),
        'search_items'       => _x( '事例検索', 'product_case' ),
        'not_found'          => _x( '事例はありません', 'product_case' ),
        'not_found_in_trash' => _x( 'ゴミ箱に事例はありません', 'product_case' ),
        'parent_item_colon'  => _x( '親 事例:', 'product_case' ),
        'menu_name'          => _x( '事例紹介', 'product_case' ),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-format-aside',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt',),
        'has_archive'   => true,
        'exclude_from_search' => false
	);
    register_post_type( 'product_case', $args );
}
add_action( 'init', 'register_cpt_product_case' );

//固定ページでビジュアルエディタを利用できないようにする
function disable_visual_editor_in_page() {
	global $typenow;
	if ($typenow == 'page') add_filter('user_can_richedit', 'disable_visual_editor_filter');
}
function disable_visual_editor_filter() {
	return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');

// お知らせ一覧
function funcGetNewsList() {

	global $post;
	$strHTML = "";

	$args = ['post_type' => 'post',
			 'posts_per_page' => -1];

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) {

		while($the_query->have_posts()) {

			$the_query->the_post();

			remove_filter ('the_content', 'wpautop');
			$strTitle    = get_the_title();
			$strDate     = get_the_date('Y.m.j');
			$imgSrc      = get_the_post_thumbnail($post->ID, 'thumbnail', ['alt'=>$strTitle]);
			$strContent  = get_the_content();
			$srtUrl      = cfs()->get('url_post');

			
			$strHTML .= "			<p>\n"
                     .  "				<time>{$strDate}</time>\n"
                     .  "				<span>{$strTitle}{$strContent}</span>\n";

			if (!empty($imgSrc)) {
				$strHTML .= "				<a href=\"{$srtUrl}\" target=\"_blank\">{$imgSrc}</a>\n";
			}

			$strHTML .= "			</p>\n";

		}
	}
	wp_reset_postdata();

	return $strHTML;
}
add_shortcode('shortGetNewsList', 'funcGetNewsList');

function fncGetMyScript() {
  if (is_page('solusana_sale') || is_page( 'solusana_thanks' )) {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js','','');
    wp_enqueue_script('jquery_ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',array('jquery'),''); 
    wp_enqueue_style('room', get_template_directory_uri() . '/css/solusana_sale.css', array(), '', 'all');
    wp_enqueue_style('validationEngine_css', get_template_directory_uri() . '/css/validationEngine.jquery.css',  array(), '', 'all');
    wp_enqueue_script('validationEngine_js', get_template_directory_uri()  . '/js/validationEngine/jquery.validationEngine.js',array('jquery'),'',true);
    wp_enqueue_script('validationEngine_ja_js', get_template_directory_uri()  . '/js/validationEngine/jquery.validationEngine-ja.js',array('jquery'),'',true);
    wp_enqueue_script('cmn_js', get_template_directory_uri()  . '/js/dc_animacolle.js',array('jquery'),'',true);
    wp_enqueue_script('solusana_js', get_template_directory_uri()  . '/js/solusana.js',array('jquery','validationEngine_js','validationEngine_ja_js'),'',true);
  }
}
add_action('wp_enqueue_scripts', 'fncGetMyScript');


add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2 );
function wpcf7_validate_email_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}