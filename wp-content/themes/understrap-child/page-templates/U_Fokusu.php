<?php
/**
* Template Name: U_Fokusu
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
				<h2 class="bg-primary trake">U FOKUSU</h2>
				
			<!-- ****************************
			VIJESTI__2. 4_POSTA
		*******************************-->

				<?php 

				$posts = get_posts(array(
					'posts_per_page'	=> 4,
					'post_type'			=> 'post',
					'cat' => 10
				));

				if( $posts ): ?>
					
					<div class="row">
						
					<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="vijesti_4posta" class="col-md-6">
							<?php the_post_thumbnail(); ?>	
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
						</div>
					<?php endforeach; ?>
					
					
					</div>
					<?php wp_reset_postdata(); ?>

				<?php endif; ?>

				<h2 class="bg-primary trake mt-3 mb-0">SAZNAJTE VIŠE</h2>
				<?php

		          $ourCurrentPage = get_query_var('paged');

		          $aboutPosts = new WP_Query(array(
		            'posts_per_page'	=> 3,
					'post_type'			=> 'post',
					'cat' => 10,
					'order' => 'ASC',
		            'paged' => $ourCurrentPage
		          ));

			          if ($aboutPosts->have_posts()) :
			            while ($aboutPosts->have_posts()) :
			              $aboutPosts->the_post();
			              ?> 

			              		<table class="table tablica_edu saznaj_vise">
						          
						                
						                <tr>

						                     <td class="slikica"><?php the_post_thumbnail(array(100,100,crop)); ?></td>
						                     <td class="ml-auto"><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></td>
						                 </tr>
						                  
						           
						                
						          
						           </table>	
			              <?php
			            endwhile;

			             echo paginate_links(array(
			              'total' => $aboutPosts->max_num_pages
			            ));

			          endif;

			        ?>
				
			</div>

			
		<!-- VIJESTI_SIDEBAR -->


			<div class="col-md-4">
				<h2 class="bg-secondary trake mb-0">POPULARNA TEME</h2>
				
				<?php  dynamic_sidebar('ufokusu')  ?>
			</div>
			
		</div>


	
	
		
				
				</div><!-- Container end -->
				</div><!-- Wrapper end -->
				<?php get_footer(); ?>