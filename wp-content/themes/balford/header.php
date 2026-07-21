<?php
/**
 * Header: <head>, preloader, top navigation.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/misc/favicon.png' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'top' ); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader"><div id="status"></div></div>

<nav class="navbar navbar-custom navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-main-collapse">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav navbar-nav navbar-left',
				'fallback_cb'    => 'balford_default_menu',
			) );
			?>
		</div>
	</div>
</nav>
