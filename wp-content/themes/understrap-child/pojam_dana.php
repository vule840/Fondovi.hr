<div id="pojam_dana">
				<h2 class="bg-secondary trake">POJAM DANA</h2>
				<div id="pojam_dana">
	<?php
	 
					$posts = get_posts(array(
						'posts_per_page'	=> 1,
										'post_type'			=> 'pojam-dana',
					
					));
					if( $posts ): ?>
					
						<h2 class="bg-secondary trake">POJAM DANA</h2>
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						
						<div class="pojam_dana">
					<h2 class="color-secondary pojam_naslov"><?php the_title(); ?></h2>
					<p><?php the_content(); ?> </p>
					
					<button type="button" class="btn btn-primary text-uppercase">Pogledaj sve</button>
				</div>
									
						
						<?php endforeach; ?>
									
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>			
				
			</div>
			</div>