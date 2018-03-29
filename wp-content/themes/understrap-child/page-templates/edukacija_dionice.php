<?php
/**
* Template Name: Edukacija_dionice
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
			EDUKACJIA__1. DIONICE
		*******************************-->
		<div class="row" id="vijesti_sidebar">
			<div class="col-md-8">
				<h2 class="bg-primary trake">FUNDAMENTALNA ULAGANJA</h2>
				<div class="jedan">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$posts = get_posts(array(
						'posts_per_page'	=> 2,
										'post_type'			=> 'pojam',
										'paged'=>$paged

					
					));
					if( $posts ): ?>
					
					<table class="table table-striped">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						<thead>
							<tr>
							<td scope="col"><h2 class="trake text-uppercase table_dionice"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </td>
							</tr>
						</thead>
					
						
						
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