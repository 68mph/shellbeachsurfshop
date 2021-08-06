<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shellbeachsurfshop
 */

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>

	<script type='text/javascript'>
	$(document).ready(function () {
	$(window).scroll(function () {
	if ($(document).scrollTop() > 10) {
		$("header").addClass("scrolled");
	} else {
		$("header").removeClass("scrolled");
	}
	});
	});
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shellbeachsurfshop' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="topmenu">
		<div class="container">
			<p><i class="fas fa-clock"></i> Store Hours: 10:00 AM – 6:00 PM</p>
			<p><i class="fas fa-phone"></i> Call Us (805) 773-1855</p>
			<p><i class="fas fa-map-marker-alt"></i> 2665 Shell Beach Rd Ste K, California 93449</p>
		</div>
		</div>
		<div class="container">
		<div class="site-branding">
		<a class="logoLink" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ) ?>" rel="home"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sbs-logo.svg" alt="<?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ) ?>" id="logo" class="img-responsive img-fluid center-block" /> </a> 
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shellbeachsurfshop' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

