<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	

	<?php if (is_singular('drustva')): ?>
		<h2 class="bg-primary trake"><?php the_title() ?></h2>
		<div class="row">
			<div class="col-6"><?php 

									$image = get_field('drustva_logo');

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</div>
			<div class="col-6"><?php the_field('drustva_tx') ?></div>
		</div>
	<?php else: ?>
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
	<?php endif ?>

	

	<div class="entry-content">

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