<?php
/**
 * The template for displaying the blog.
 *
 * This is the template that displays the blog posts by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		/* Include the Post-Format-specific template for the content.
		 * If you want to overload this in a child theme then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'content', 'home' );
		?>

	<?php endwhile; ?>

	<?php _tk_content_nav( 'nav-below' ); ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>