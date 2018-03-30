<div id="pojam_dana">
				<h2 class="bg-secondary trake">POJAM DANA</h2>
				<div id="pojam_dana">

				    <?php

          $ourCurrentPage = get_query_var('paged');

          $aboutPosts = new WP_Query(array(
            'posts_per_page'	=> 1,
			'post_type'			=> 'pojam-dana',
			'order' => 'ASC',
            'paged' => $ourCurrentPage
          ));

	          if ($aboutPosts->have_posts()) :
	            while ($aboutPosts->have_posts()) :
	              $aboutPosts->the_post();
	              ?> 

	              <div class="pojam_dana">
					<h2 class="color-secondary pojam_naslov"><?php the_title(); ?></h2>
					<?php the_content(); ?> 
					<button type="button" class="btn btn-primary text-uppercase">Pogledaj sve</button>
				</div>
	              <?php
	            endwhile;

	            /* echo paginate_links(array(
	              'total' => $aboutPosts->max_num_pages
	            ));*/

	          endif;

	        ?>

		
				
			</div>
			</div>