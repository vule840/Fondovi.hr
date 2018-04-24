<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	
		
		<h2 class="bg-primary trake"><?php the_category() ?></h2>

			<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

			<header class="entry-header">

				

						<div class="row" id="single_post_naslov">
									<div class="col-md-9">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
									<div class="col-md-3">
										<h4 class="kategorija"><?php the_category(); ?><i class="fa fa-square kvadrat_kategorije" aria-hidden="true"></i></h4>
									</div>
								</div>
			
			</header>
	

	

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
