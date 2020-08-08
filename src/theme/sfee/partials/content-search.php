<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SFEE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php sfee_post_thumbnail(); ?>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sfee_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
		the_excerpt();

		sfee_read_more();
		?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
