<?php
/**
* Template Name: Fondovi_naslovna
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
			POČETNA__1. AKTUALNO
		*******************************-->
		<div class="row">
			<div class="col-md-8">
				<h2 class="bg-primary trake">AKTUALNO</h2>
				<div class="prvi">
					<?php
						//argumenti
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
																		'cat' => 9
						);
						//novi query
						$query = new WP_Query($args);
					while($query->have_posts()) : $query->the_post();
					?>
					<p><?php the_post_thumbnail('category-thumb'); ?></p>
					
					<div class="podnozje_naslova">
						<div class="row">
							<div class="col-md-9">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="col-md-3">
								<h4 class="kategorija"><?php the_category(); ?></h4>
							</div>
						</div>
						
					</div>
					
					
					
					<?php endwhile; wp_reset_query(); ?>
				</div>
				
			</div>
			<div class="col-md-4">
				<h2 class="bg-secondary trake">NAJČITANIJE</h2>
				<div class="jedan">
					<?php
							//argumenti
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 1,
																			'cat' => 11
							);
							//novi query
							$query = new WP_Query($args);
					while($query->have_posts()) : $query->the_post();
					?>
					<p><?php the_post_thumbnail(); ?></p>
					
					<div class="podnozje_naslova">
						<div class="row">
							<div class="col-md-9">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="col-md-3">
								<h4 class="kategorija"><?php the_category(); ?></h4>
							</div>
						</div>
						
					</div>
					
					
					
					<?php endwhile; wp_reset_query(); ?>
				</div>
				<div class="dva">
					<?php
							//argumenti
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 1,
																			'cat' => 12
							);
							//novi query
							$query = new WP_Query($args);
					while($query->have_posts()) : $query->the_post();
					?>
					<p><?php the_post_thumbnail(); ?></p>
					
					<div class="podnozje_naslova">
						<div class="row">
							<div class="col-md-9">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="col-md-3">
								<h4 class="kategorija"><?php the_category(); ?></h4>
							</div>
						</div>
						
					</div>
					
					
					
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
			
		</div>
		<!-- ****************************
			POČETNA__2. INVESTICIJSKI FONDOVI
		*******************************-->
		<div class="row" id="pocetna_investicijski">
			<div class="col-md-8">
				<h2 class="bg-primary trake">INVESTICIJSKI FONDOVI</h2>
				<!-- Tabovi -->
				<nav>
					<div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Svi fondovi</a>
						<a class="nav-item nav-link" id="nav-dionicki-tab" data-toggle="tab" href="#nav-dionicki" role="tab" aria-controls="nav-dionicki" aria-selected="false">Dionički</a>
						<a class="nav-item nav-link" id="nav-mjesoviti-tab" data-toggle="tab" href="#nav-mjesoviti" role="tab" aria-controls="nav-mjesoviti" aria-selected="false">Mješoviti</a>
						<a class="nav-item nav-link" id="nav-obveznicki-tab" data-toggle="tab" href="#nav-obveznicki" role="tab" aria-controls="nav-obveznicki" aria-selected="false">Obveznički</a>
						<a class="nav-item nav-link" id="nav-novcani-tab" data-toggle="tab" href="#nav-novcani" role="tab" aria-controls="nav-novcani" aria-selected="false">Novčani</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<!-- TABLE -->
						<table class="table table-responsive w-100 d-block d-md-table">
							<!-- Dobitnici -->
							<thead>
								<tr>
									<th scope="col">Dobitnici</th>
									<th scope="col"></th>
									<th scope="col text-center">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>2,03%</td>
									<td>5,31%</td>
									<td>6,19%</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
							<!-- Gubitnici -->
							<thead>
								<tr>
									<th scope="col">Gubitnici</th>
									<th scope="col"></th>
									<th scope="col">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="nav-dionicki" role="tabpanel" aria-labelledby="nav-dionicki-tab">
						<table class="table table-responsive w-100 d-block d-md-table">
							<!-- Dobitnici -->
							<thead>
								<tr>
									<th scope="col">Dobitnici</th>
									<th scope="col"></th>
									<th scope="col text-center">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>2,03%</td>
									<td>5,31%</td>
									<td>6,19%</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
							<!-- Gubitnici -->
							<thead>
								<tr>
									<th scope="col">Gubitnici</th>
									<th scope="col"></th>
									<th scope="col">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="nav-mjesoviti" role="tabpanel" aria-labelledby="nav-mjesoviti-tab">
						<table class="table table-responsive w-100 d-block d-md-table">
							<!-- Dobitnici -->
							<thead>
								<tr>
									<th scope="col">Dobitnici</th>
									<th scope="col"></th>
									<th scope="col text-center">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>2,03%</td>
									<td>5,31%</td>
									<td>6,19%</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
							<!-- Gubitnici -->
							<thead>
								<tr>
									<th scope="col">Gubitnici</th>
									<th scope="col"></th>
									<th scope="col">1. Mjesec</th>
									<th scope="col">2. Mjesec</th>
									<th scope="col">3. Mjesec</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">KD Balanced</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">KD Invest</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span> </td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">ZB Euroaktiv</th>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,99%</span></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@twitter</td>
								</tr>
							
							</tbody>
						</table>
						
					</div>
					<div class="tab-pane fade" id="nav-obveznicki" role="tabpanel" aria-labelledby="nav-obveznicki-tab">...</div>
					<div class="tab-pane fade" id="nav-novcani" role="tabpanel" aria-labelledby="nav-novcani-tab">...</div>
				</div>
			</div>
			<div class="col-md-4"><img src="http://via.placeholder.com/350x500" alt=""></div>
		</div>
		<!-- ****************************
						POČETNA__3. U FOKUSU
		*******************************-->
		<div class="row">
			
			<div class="col-md-8">
				<h2 class="bg-primary trake">U FOKUSU</h2>
				
					
				<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 2,
									'post_type'			=> 'post',
				'cat' => 10
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
				
			</div>
			<div class="col-4"><h2 class="bg-secondary trake">TEČAJNA LISTA</h2></div>
		</div>
		<!-- ****************************
						POČETNA__4. VIJESTI
		*******************************-->
		<div class="row" id='pocetna_vijesti'>
			<div class="col-md-8">
				<h2 class="bg-primary trake">VIJESTI</h2>
				Ovdje ide carusel-vijesti
				<!-- ************** -->
				<a href="#">U Fokusu</a>
				<a href="#">Hrvatska</a>
				<a href="#">Regija</a>
				
				<div class="jedan ufokusu">
					<?php
					$posts = get_posts(array(
						'posts_per_page'	=> 6,
										'post_type'			=> 'post',
					'cat' => 10
					));
					if( $posts ): ?>
					
					<div class="single-item">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						
						<div class="row">
							<div class="col-md-12"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vijesti'); ?></a></div>
							<div class="col-md-12"><h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
							<div class="col-md-12 text-right pt-3"> <?php the_category(); ?></div>
							 
							
						</div>
						
						
						<?php endforeach; ?>
						
					</div>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<!-- ************** -->
				<div class="jedan hrvatska">
					<?php
					$posts = get_posts(array(
						'posts_per_page'	=> 6,
										'post_type'			=> 'post',
					'cat' => 9
					));
					if( $posts ): ?>
					
					<div class="single-item">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						
						<div class="row">
							<div class="col-md-12"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vijesti'); ?></a></div>
							<div class="col-md-12"><h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
							<div class="col-md-12 text-right pt-3"> <?php the_category(); ?></div>
							 
							
						</div>
						
						
						<?php endforeach; ?>
						
					</div>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<!-- ************** -->
				<div class="jedan regija">
					<?php
					$posts = get_posts(array(
						'posts_per_page'	=> 6,
										'post_type'			=> 'post',
					'cat' => 11
					));
					if( $posts ): ?>
					
					<div class="single-item">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						
						<div class="row">
							<div class="col-md-12"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vijesti'); ?></a></div>
							<div class="col-md-12"><h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
							<div class="col-md-12 text-right pt-3"> <?php the_category(); ?></div>
							 
							
						</div>
						
						
						<?php endforeach; ?>
						
					</div>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4" id="pojam_dana">
				
				
				<h2 class="bg-secondary trake">POJAM DANA</h2>
				

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
					<button type="button" class="btn btn-primary text-uppercase"><a class="text-white" href="<?php bloginfo( 'url' ); ?>/pojam-dana">Pogledaj sve</a></button>
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
		<!-- ****************************
				POČETNA__5. DRUŠTVA ZA UPRAVLJANJE
		*******************************-->
		<div class="row" id="logici">
			<div class="col-md-8">
				<h2 class="bg-primary trake">DRUŠTVA ZA UPRAVLJANJE</h2>
				Ovdje ide carusel-logići

				<?php
					$posts = get_posts(array(
						'posts_per_page'	=> 6,
						'post_type'			=> 'drustva'
					));
					if( $posts ): ?>
					
					<div class="single-item">
						
						<?php foreach( $posts as $post ):
							
							setup_postdata( $post );
							
						?>
						
						<div>

						<a href="<?php the_permalink( ); ?>">Profil</a>
						<?php 
						$image = get_field('logo');

						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>	


						</div>
						<?php endforeach; ?>

						
					</div>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

						<?php


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


				<div class="multiple-items">
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li><i class="fa fa-home" aria-hidden="true"></i> <span>Profil</span> </li>
									<li><i class="fa fa-info" aria-hidden="true"></i> <span>Fondovi</span></li>
									<li><i class="fa fa-rss" aria-hidden="true"></i> <span>Novosti</span></li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i> <span>Kontakt</span></li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div>
						<div class="card" >
							<img class="card-img-top" src="wp-content/uploads/2018/03/pbz-nekretnine.png" alt="Card image cap">
							<div class="card-body">
								<ul>
									<li>Profil</li>
									<li>Fondovi</li>
									<li>Novosti</li>
									<li>Kontakt</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="col-md-4">
				<div class="fb-page" 
  data-href="https://www.facebook.com/fondovi.hr"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"></div> <br>
				Newsletter
			</div>
		</div>
		
				
				</div><!-- Container end -->
				</div><!-- Wrapper end -->
				
				<?php get_footer(); ?>