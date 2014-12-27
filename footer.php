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
			<div class="site-footer-inner col-sm-12">
			
				<div class="site-info">
					<span class="alignleft">
						<?php do_action( '_tk_credits' ); ?>
						&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?>
					</span>
					<span class="alignright">
						<?php printf( __( 'Designed by %s',  '_tk' ), '<a href="http://forwardpushmedia.com/" rel="designer">Forward Push Media</a>' ); ?>
						<span class="sep"> | </span>
						<?php printf( __( 'Proudly powered by %s',  '_tk' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>' ); ?>
					</span>
				</div><!-- close .site-info -->
			
			</div>	
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>