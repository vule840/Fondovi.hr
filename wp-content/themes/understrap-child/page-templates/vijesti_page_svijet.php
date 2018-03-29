<?php
/**
* Template Name: Vijesti_page_Svijet
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
			VIJESTI__1. HRVATSKA
		*******************************-->
		<div class="row" id="vijesti_sidebar">
			<div class="col-md-8">
				<h2 class="bg-primary trake">SVIJET</h2>
				<div class="prvi">
					<?php
						//argumenti
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
																		'cat' => 8
						);
						//novi query
						$query = new WP_Query($args);
					while($query->have_posts()) : $query->the_post();
					?>
					<p><?php the_post_thumbnail('category-thumb'); ?></p>
					
					<div class="podnozje_naslova">
						<div class="row">
							<div class="col-md-9">
								<h2><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="col-md-3">
								<h4 class="kategorija"><?php the_category(); ?></h4>
							</div>
						</div>
						
					</div>
					
					
					
					<?php endwhile; wp_reset_query(); ?>
				</div>
			<!-- ****************************
			VIJESTI__2. 4_POSTA
		*******************************-->

				<?php 

				$posts = get_posts(array(
					'posts_per_page'	=> 4,
					'post_type'			=> 'post'
				));

				if( $posts ): ?>
					
					<div class="row">
						
					<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="vijesti_4posta" class="col-md-6">
							<?php the_post_thumbnail('category-thumb'); ?>	
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
						</div>
					<?php endforeach; ?>
					
					
					</div>
					<?php wp_reset_postdata(); ?>

				<?php endif; ?>

				<h2 class="bg-primary trake mt-3">SAZNAJTE VIŠE</h2>
			
				
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