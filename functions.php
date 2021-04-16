<?php 
//ナビゲーションメニュー
register_nav_menus([
  'global_nav' => 'グローバル',
  'footer' =>'フッターナビゲーション'
]);

//キャプチャー画像のサイズ
function thumbnails_setup(){
  add_theme_support('post-thumbnails');
  add_image_size('home-banner', 1200,300);
  add_image_size('page-banner', 1200,150);
}
add_action('after_setup_theme','thumbnails_setup');

// カスタム投稿タイプ お知らせ
function custom_post_register_news() {
  $labels =[
    'singular_name' => 'news',
    'edit_item' => 'news',
  ];
  $args  = array(
    'label' => 'お知らせ',
		'labels'             => $labels,
		'public'             => true,
    'description' =>"",
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
  register_post_type( 'news', $args );
}
add_action( 'init', 'custom_post_register_news' );






?>