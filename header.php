<?php
/**
 * Template for displaying our header.
 *
 * This template displays all of the <head> section and everything up until <div id="content">
 *
 * @package alcatraz
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="menu-screen"></div>

<?php do_action( 'alcatraz_before' ); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alcatraz' ); ?></a>

	<?php do_action( 'alcatraz_before_header' ); ?>

	<header id="site-header" class="site-header" role="banner">

		<?php do_action( 'alcatraz_before_header_inside' ); ?>

		<div class="header-inner">

			<?php do_action( 'alcatraz_header' ); ?>

		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<button class="mobile-menu-toggle" type="button">
				<span class="mobile-menu-toggle__bar bar-1"></span>
				<span class="mobile-menu-toggle__bar bar-2"></span>
				<span class="mobile-menu-toggle__bar bar-3"></span>
				<span class="screen-reader-text">Menu</span>
			</button>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php do_action( 'alcatraz_before_primary_nav' ); ?>

				<?php wp_nav_menu( array(
					'theme_location'  => 'primary',
					'menu_id'         => 'primary-menu',
					'menu_class'      => 'primary-menu menu',
					'container_class' => 'main-navigation__menu',
				) ); ?>

				<?php do_action( 'alcatraz_after_primary_nav' ); ?>
			</nav>

		<?php endif; ?>

		<?php do_action( 'alcatraz_after_header_inside' ); ?>

	</header>

	<?php do_action( 'alcatraz_after_header' ); ?>

	<?php do_action( 'alcatraz_before_content' ); ?>

	<div id="content" class="site-content">

		<?php do_action( 'alcatraz_before_content_inside' ); ?>
