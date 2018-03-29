<?php
/**
* Template Name: Edukacija_otvoreni
*
* Template for displaying a page without sidebar even if a sidebar widget is published.
*
* @package understrap
*/

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<!-- ****************************
			EDUKACJIA__1. 
		*******************************-->
		
		<div class="row" id="vijesti_sidebar">
			<div class="col-md-8">
				<h2 class="bg-primary trake text-uppercase"><?php the_title(); ?></h2>
				<div class="jedan">
					<?php
					
					$posts = get_posts(array(
						'posts_per_page'	=> -1,
										'post_type'			=> 'edukacija_fond'
										

					
					));
					if( $posts ): ?>
					
					<table class="table tablica_edu">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						<tbody>
							<tr>
							<td scope="col"><h2 class="trake text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </td>
							</tr>
						</tbody>
					
						
						
						<?php endforeach; ?>
						
					</table>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
		


			
				
			</div>

			
		<!-- VIJESTI_SIDEBAR -->


			<div class="col-md-4">
				<h2 class="bg-secondary trake">NAJČITANIJE</h2>
				
				<?php  dynamic_sidebar('vijesti-sidebar')  ?>
			</div>
			
		</div>

	
		
				
				</div><!-- Container end -->
				</div><!-- Wrapper end -->
				<?php get_footer(); ?>