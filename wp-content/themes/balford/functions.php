<?php

function balford_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => 'Головне меню',
	) );
}
add_action( 'after_setup_theme', 'balford_setup' );

function balford_assets() {
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style( 'balford-bootstrap', $theme_uri . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'balford-animate', $theme_uri . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'balford-font-awesome', $theme_uri . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'balford-ionicons', $theme_uri . '/assets/css/ionicons.min.css' );
	wp_enqueue_style( 'balford-swipebox', $theme_uri . '/assets/css/swipebox.css' );
	wp_enqueue_style( 'balford-main', $theme_uri . '/assets/css/pheromone.css' );

	wp_enqueue_script( 'balford-jquery', $theme_uri . '/assets/js/jquery-1.12.3.min.js', array(), null, true );
	wp_enqueue_script( 'balford-bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-easing', $theme_uri . '/assets/js/jquery.easing.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-device', $theme_uri . '/assets/js/device.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-placeholder', $theme_uri . '/assets/js/jquery.placeholder.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-shuffle', $theme_uri . '/assets/js/jquery.shuffle.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-parallax', $theme_uri . '/assets/js/jquery.parallax.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-swipebox', $theme_uri . '/assets/js/jquery.swipebox.min.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-smoothscroll', $theme_uri . '/assets/js/smoothscroll.min.js', array(), null, true );
	wp_enqueue_script( 'balford-smartmenus', $theme_uri . '/assets/js/jquery.smartmenus.js', array( 'balford-jquery' ), null, true );
	wp_enqueue_script( 'balford-wow', $theme_uri . '/assets/js/wow.min.js', array(), null, true );
	wp_enqueue_script( 'balford-main', $theme_uri . '/assets/js/pheromone.js', array( 'balford-jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'balford_assets' );

function balford_register_news_cpt() {
	register_post_type( 'news', array(
		'labels' => array(
			'name'          => 'Новини',
			'singular_name' => 'Новина',
			'add_new_item'  => 'Додати новину',
			'edit_item'     => 'Редагувати новину',
			'all_items'     => 'Усі новини',
		),
		'public'       => true,
		'has_archive'  => true,
		'menu_icon'    => 'dashicons-media-text',
		'rewrite'      => array( 'slug' => 'news' ),
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'balford_register_news_cpt' );

/**
 * Fallback menu used until a menu is assigned to the "primary" location
 * in Зовнішній вигляд → Меню. Links by page slug (about, news, ecology, contacts).
 */
function balford_default_menu() {
	$links = array(
		'about'    => 'Про компанію',
		'news'     => 'Новини',
		'ecology'  => 'Екологія',
		'contacts' => 'Контакти',
	);

	echo '<ul class="nav navbar-nav navbar-left">';
	foreach ( $links as $slug => $label ) {
		$page = get_page_by_path( $slug );
		$url  = $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
		printf( '<li><a href="%s">%s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';

	if ( function_exists( 'pll_the_languages' ) ) {
		echo '<ul class="nav navbar-nav navbar-left">';
		pll_the_languages( array( 'raw' => 0 ) );
		echo '</ul>';
	}
}
