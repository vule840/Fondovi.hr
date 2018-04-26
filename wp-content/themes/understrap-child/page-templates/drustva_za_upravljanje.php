<?php
/**
* Template Name: Drustva_za_upravljanje
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
			
			<div
			class="row" id="vijesti_sidebar">
			<div class="col-md-8">
				<h2 class="bg-primary trake">DRUŠTVA ZA UPRAVLJANJE</h2>
				<div class="jedan">


					<?php

					$ourCurrentPage = get_query_var('paged');

					$aboutPosts = new WP_Query(array(
						'posts_per_page'	=> 10,
						'post_type'			=> 'drustva',
						'order' => 'ASC',
						'paged' => $ourCurrentPage
					));

					if ($aboutPosts->have_posts()) :
						while ($aboutPosts->have_posts()) :
							$aboutPosts->the_post();
							?> 
							<table class="table table-striped">
								<tbody  id="drustva_tablica">
									<tr>
										<td><a class="drustvo_upravljanje" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
										<td class="text-right"> <?php 

										//$image = get_field('logo');
										$image = get_field('drustva_logo');
										$size = 'mala';
										$thumb = $image['sizes'][ $size ];

										if( !empty($image) ): ?>

											<a  href="<?php echo $url; ?>" title="<?php echo $title; ?>">

											<img class="mx-auto d-block" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

										</a>		
										<!-- <img  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->

									<?php endif; ?></td>
									
								</tr>
								<tr>
									<td>
										<!-- <h2>Ovdje idu fondovi</h2> -->
										<!-- <?php the_content(); ?> -->
										<?php

/*
*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
*/

$post_objects = get_field('post_object');

if( $post_objects ): ?>
<ul>
	<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			
		</li>
	<?php endforeach; ?>
</ul>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


</td>


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


<!-- VIJESTI_SIDEBAR -->


<div class="col-md-4">
	<!-- <h2 class="bg-secondary trake mb-0">NAJČITANIJE</h2> -->
	
	<?php  dynamic_sidebar('drustva_upravljanje')  ?>
</div>

</div>





</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>