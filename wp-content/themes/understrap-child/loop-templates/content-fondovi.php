<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	
<h2 class="bg-primary trake"><?php the_title() ?></h2>

	<div class="entry-content pt-3">

		<?php the_content(); ?>
	
	
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->





	 <!--<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer> .entry-footer -->

</article><!-- #post-## -->
