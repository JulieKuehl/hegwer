<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	
<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="superheader col-xs-12 col-md-6 col-md-offset-6">
				<?php dynamic_sidebar( 'superheader-info' ); ?>
			</div><!-- .superheader -->
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="container">
		<div class="row site-fixed-header">
			<div class="site-header-inner col-xs-10 col-md-5">
					
				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>
				
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				</div><!-- .site-branding -->
			</div><!-- .site-header-inner -->

			<nav class="site-navigation">
				<div class="site-navigation-inner col-md-7">
					<div class="navbar navbar-default">
						<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!-- .navbar-header -->

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => '',
								'menu_id' => 'main-menu',
								'walker' => new wp_bootstrap_navwalker()
							)
						); ?>

					</div><!-- .navbar -->
				</div><!-- .site-navigation-inner -->
			</nav><!-- .site-navigation -->
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- #masthead -->

	<div>
		<?php dynamic_sidebar( 'jumbotron' ); ?>
	</div>

<div class="main-content">	
	<div class="container">
		<div class="row">

		</div><!-- .row -->

		<div class="row">
			<div class="main-content-inner col-sm-12 col-md-8">