<?php
/**
* Template Name: Edukacija_fundamentalna
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

          $ourCurrentPage = get_query_var('paged');

          $aboutPosts = new WP_Query(array(
            'posts_per_page'	=> 2,
			'post_type'			=> 'edufundanaliza',
			'order' => 'ASC',
            'paged' => $ourCurrentPage
          ));

	          if ($aboutPosts->have_posts()) :
	            while ($aboutPosts->have_posts()) :
	              $aboutPosts->the_post();
	              ?> 

	              	<table class="table tablica_edu">
						<tbody>
							<tr>
							<td scope="col"><h2 class="trake text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </td>
							</tr>
						</tbody>
	              	</table>	
	              <?php
	            endwhile;

	             echo paginate_links(array(
	              'total' => $aboutPosts->max_num_pages
	            ));

	          endif;

	        ?>


				</div>

			
				
			</div>

			<?php

			$post_object = get_field('post_object');

			if( $post_object ): 

				// override $post
				$post = $post_object;
				setup_postdata( $post ); 

				?>
			    <div>
			    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    	<span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
			    </div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		<!-- VIJESTI_SIDEBAR -->


			<div class="col-md-4">
				<h2 class="bg-secondary trake mb-0">LEKSIKON - NAJTRAŽENIJI POJMOVI</h2>
				
				<?php  dynamic_sidebar('edukacija')  ?>
			</div>
			
		</div>

	
		
				
				</div><!-- Container end -->
				</div><!-- Wrapper end -->
				<?php get_footer(); ?>