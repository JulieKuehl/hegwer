<?php
/**
 * The template for displaying the front page.
 *
 * @package _tk
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	</article><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

<div class="col-sm-6">
	<?php dynamic_sidebar( 'home-column-1' ); ?>
</div>
<div class="col-sm-6">
	<?php dynamic_sidebar( 'home-column-2' ); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
