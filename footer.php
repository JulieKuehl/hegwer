<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 footer-left">
				<?php dynamic_sidebar( 'footer-left' ); ?>
			</div>
			<div class="col-sm-4 col-sm-offset-4 footer-right">
				<?php dynamic_sidebar( 'footer-right' ); ?>
			</div>

		</div>

		<div class="row">
			<div class="site-footer-inner col-sm-12">
			
				<div class="site-info">
						<?php do_action( '_tk_credits' ); ?>
						&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?>
						<span class="sep"> | </span>
						<?php printf( __( 'Law firm website design by %s',  '_tk' ), '<a href="http://forwardpushmedia.com/services/" rel="designer">Forward Push Media</a>' ); ?>
<!--						<span class="sep"> | </span>-->
<!--						--><?php //printf( __( 'Proudly powered by %s',  '_tk' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>' ); ?>
				</div><!-- close .site-info -->
			
			</div><!-- close .site-footer-inner -->
		</div><!-- close .row -->

		<div class="row footer-nav">
			<div class="navbar-default">
				<div class="navbar-footer">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
				</div>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>