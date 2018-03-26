<main class="site-main" id="main" role="main">


		<?php 

			//argumenti
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'cat' => 3,
				'meta_key' => 'order',
				'meta_compare' => '>',
				'meta_value' => 2,
				'orderby' => 'meta_value',
				'order' => 'ASC'
				

			);
			//novi query
			   $query = new WP_Query($args);

            while($query->have_posts()) : $query->the_post();

		 ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_ID() ?></p>
			<p><?php the_excerpt() ?></p>
			<p><?php the_category(); ?></p>
			<p><?php the_tags() ?></p>
			<p><?php the_permalink(  ); ?></p>
			<p><?php the_post_thumbnail(); ?></p>

			<p><?php the_ ?></p>
			<P><?php the_row() ?></P>
					
<?php endwhile; wp_reset_query(); ?>






					<?php 

					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> 'post',
						'meta_query' =>	array(
							//'relation' => 'OR',
							/*array(
								'key' => 'size',
								'value' => 'xl',
								'type' => 'CHAR',
								'compare' => '='
							),*/
							/*array(
								'key' => 'price',
								'value' => array(50,100),
								'type' => 'NUMERIC',
								'compare' => 'BETWEEN'	
							),*/
							array(
								'relation' => 'OR',
								array(
									'key' => 'size',
									'value' => 'l',
									'type' => 'CHAR',
									'compare' => '='
								),
								array(
									'key' => 'color',
									'value' => 'green',
									'type' => 'CHAR',
									'compare' => '='
								)	
							),
							array(
								'key' => 'price',
								'value' => 44,
								'type' => 'NUMERIC',
								'compare' => '>'
							)
						)
					));

					if( $posts ): ?>
						
						<div class="row">
							
						<?php foreach( $posts as $post ): 
							
							setup_postdata( $post );
							
							?>
										
				<div class="post clearfix">
                <h5><?php the_title(); ?></h5>
                <div class="taxonomy clearfix">
                    <div class="categories">
                        <strong>Price:</strong>
                        <span class="price"><?php the_field('price') ?></span>
                    </div>
                
                    <div class="tags">
                        <strong>Size:</strong> <?php the_field('size'); ?><br>
                        <strong>Color:</strong> <?php the_field('color'); ?>
                    </div>
                </div>
            </div>




						
						<?php endforeach; ?>
						
						</div>
						
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>


				</main><!-- #main -->