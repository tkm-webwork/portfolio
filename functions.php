<?php
function my_setup() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

/* CSSの読み込み
---------------------------------------------------------- */
function register_stylesheet() {
	wp_register_style('reset', get_template_directory_uri().'/css/reset.css');
  wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); 
  wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), '5.15.3', 'all');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
}
function add_stylesheet() {
	register_stylesheet();
  wp_enqueue_style('animate', '', array(), '1.0', false);
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), '5.15.3', 'all');
	wp_enqueue_style('reset', '', array(), '1.0', false);
	wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

/* スクリプトの読み込み
---------------------------------------------------------- */
function register_script(){
  wp_register_script('wow', get_stylesheet_directory_uri().'/js/wow.min.js');
	wp_register_script('script', get_template_directory_uri().'/js/script.js');
}
function add_script(){ 
	register_script();
	wp_enqueue_script('jquery');
  wp_enqueue_script('wow', '', array(), '1.0', true);
	wp_enqueue_script('script', '', array(), '1.0', true);
}
add_action('wp_print_scripts','add_script');