<?php 
if ( ! function_exists( 'ag_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function ag_setup() {
  /*
   * This theme uses wp_nav_menu() in one location.
   */
  register_nav_menus( array(
   'main-menu' => esc_html( 'Main-menu' )
  ) );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'portfolio-thumbnail', 335, 335, true );
  add_image_size( 'slider-image', 555, 416, true );
  add_image_size( 'diplomas-photo', 70, 70, true );
  add_image_size( 'team-thumbnail', 350, 315, true );
  add_image_size( 'blog-thumbnail', 359, 201, true );
  add_image_size( 'blog-single-thumbnail', 848, 477, true );
  add_image_size( 'widget-new-posts-thumbnail', 85, 60, true );
 }
  // Регистрируем сайдбар
	function start_sidebar() {
		$args = array(
			'id'            => 'sidebar-right',
			'name'          => __( 'Сайдбар', 'striped' ),
			'description'   => __( 'Правая колонка', 'striped' ),
			'class'         => 'striped-widget',
			'before_title'  => '<header><h2 class="widgettitle">',
			'after_title'   => '</h2></header>',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
		);
		register_sidebar( $args );
	}
	// Хук для функции 'widgets_init'
	add_action( 'widgets_init', 'start_sidebar' );

 add_action( 'after_setup_theme', 'ag_setup' );
endif;

//подкл.скриптов

 function ag_scripts() {

  wp_enqueue_style( 'ag-google-font', 'http://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round' );
  wp_enqueue_style( 'ag-bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'ag-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
  wp_enqueue_style( 'ag-owl-theme.default', get_template_directory_uri() . '/css/owl.theme.default.css' );
  wp_enqueue_style( 'ag-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
  wp_enqueue_style( 'ag-font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'ag-style', get_template_directory_uri() . '/css/style.css' );
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ag-js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'ag-js-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'ag-magnific-popup',  get_template_directory_uri() . '/js/jquery.magnific-popup.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'ag-main.js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );

 }
 add_action( 'wp_enqueue_scripts', 'ag_scripts' );
 
require_once('inc/register-types.php');
//require_once('inc/clear-garbage.php');
require_once('inc/customize-comments.php');

add_filter( 'wpseo_remove_reply_to_com', '__return_false' );//устраняет проблемы с комментами , связанн. с плагином Yoast SEO v7.0 нужно просто вставить ссылку на фильтр в functions.php

//устанавл.фильтр кол-ва вывод.слов в ексерпт
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );

function my_navigation_template( $template, $class ){
	return '
	<center>
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav> 
	</center>	
	';//<center> - выравнив.пагинацию по центру. устар.тег
}
 // поддержка всех перечисленных форматов(типов) постов 
add_theme_support( 'post-formats', array('aside', 'galery', 'image', 'video', 'audio'));//в консоли в каждой записи появл.окно "формат" 
//get_post_type() - возвр.тип поста
?>