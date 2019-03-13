<?php
/**
 * The Header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package    ThemeGrill
 * @subpackage FoodHunt
 * @since      0.1
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

<?php do_action( 'foodhunt_before' ); ?>

<div id="page" class="hfeed site">

	<!-- <?php do_action( 'foodhunt_before_header' ); ?> -->

	<header id="masthead" class="site-header main_h <?php echo esc_attr( $foodhunt_logo_text ); ?>" role="banner">

			<!-- Rico Header -->
			<div class="row">
        	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<!-- <h2 class="atelier-title">L'Atelier de <span>James</span></h2> -->
				<img class="rico-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
			</a>

        	<div class="rico_mobile-toggle">
            	<span></span>
            	<span></span>
            	<span></span>
        	</div>

			<nav class="rico-nav">
				<ul>
					<li><a href="#menu-jour">Menu du jour</a></li>
					<li><a href="<?php echo get_page_link(718); ?>">Menu de la semaine</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</nav>

    	</div> <!-- / row -->		

		<!-- End Rico Header -->

	</header><!-- #masthead -->
	<div class="hero">
		<div class="hero_milieu">
			<div class="header_title">
				<!-- <h1>L'Atelier de <span id="title_j">J</span><span>ames</span></h1> -->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
			</div>
		</div>
		<div class="hero_bottom">
			<h3>Traiteur - Epicerie fine</h3>
			<h4>BIARRITZ</h4>
			<div class="hero_bottom__contact">
				<h4>05.59.26.33.37</h4>
				<h4>latelierdejamse64@yahoo.com</h4>
			</div>
		</div>
	</div>
	

	<?php do_action( 'foodhunt_after_header' ); ?>



	<div class="body-content-wrapper">

		<?php if ( ! is_front_page() && ( is_home() || is_archive() || is_page() ) ) {
			$foodhunt_header_title_bar = get_theme_mod( 'foodhunt_header_title_bar', '' );

			$foodhunt_no_header_image = '';
			if ( empty( $foodhunt_header_title_bar ) ) {
				$foodhunt_no_header_image = ' header-title-no-img';
			} ?>
			<!-- <div class="header-titlebar-wrapper<?php echo esc_attr( $foodhunt_no_header_image ) ?> clearfix">

				<?php if ( ! empty( $foodhunt_header_title_bar ) ) { ?>
					<div class="header-titlebar-overlay"></div>
					<img src="<?php echo esc_url( $foodhunt_header_title_bar ); ?>">
				<?php } ?>

				<div class="header-title-wrap">
					<?php foodhunt_header_title(); ?>					
				</div>
			</div> -->
		<?php } ?>
