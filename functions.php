<?php
$uri = get_template_directory_uri(); 
$dir = get_template_directory(); 

function twpp_enqueue_styles() {
  $uri = get_template_directory_uri();
  wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' );
  wp_enqueue_style( 'font', '//fonts.googleapis.com/css?family=Volkhov&display=swap' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.12.4.min.js');
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );


//ウィジェット

//ウィジェット1
if (function_exists('register_sidebar')) {
  register_sidebar(array('id'=>'side-1','name' => 'サイド1', 'before_title' => '<h3 class="widgettitle">', 'after_title' => '</h3>'));
  register_sidebar(array('id'=>'side-2','name' => 'サイド2', 'before_title' => '<h3 class="widgettitle">', 'after_title' => '</h3>'));
  register_sidebar(array('id'=>'side-3','name' => 'サイド3', 'before_title' => '<h3 class="widgettitle">', 'after_title' => '</h3>'));
  register_sidebar(array('id'=>'footer-1','name' => 'フッター', 'before_title' => '<h3 class="widgettitle">', 'after_title' => '</h3>'));
  register_sidebar(array(
    'name' => '記事下',
    'id' => 'post-under',
    'description' => '投稿の下',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

}

//RSSフィード
add_theme_support( 'automatic-feed-links' );


//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );


//タイトルタグ
add_theme_support('title-tag');


//クラシックエディタ
add_filter( 'use_block_editor_for_post', '__return_false' ); 


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );


//カスタムヘッダー
add_theme_support( 'custom-header', array(
	'width' => 1500,
	'height' => 250,
	'default-image' => '%s/header-1500x250.jpg',
	'header-text' => false
) );