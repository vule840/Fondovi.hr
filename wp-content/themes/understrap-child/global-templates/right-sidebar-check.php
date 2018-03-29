<?php
/**
 * Right sidebar check.
 *
 * @package understrap
 */
?>

<?php $sidebar_pos = get_theme_mod( 'understrap_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <div class="col-md-4">
				<h2 class="bg-secondary trake">NAJČITANIJE</h2>
				
				<?php  dynamic_sidebar('vijesti-sidebar')  ?>
			</div>

<?php endif; ?>
