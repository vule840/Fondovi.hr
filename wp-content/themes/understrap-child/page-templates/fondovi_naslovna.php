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
								<h2><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
																			'cat' => 10
							);
							//novi query
							$query = new WP_Query($args);
					while($query->have_posts()) : $query->the_post();
					?>
					<p><?php the_post_thumbnail(); ?></p>
					
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
				<div class="dva">
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
					<p><?php the_post_thumbnail(); ?></p>
					
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
			</div>
			
		</div>
		<!-- ****************************
			POČETNA__2. INVESTICIJSKI FONDOVI
		*******************************-->
		<div class="row">
			<div class="col-md-8">
				<h2 class="bg-primary trake">INVESTICIJSKI FONDOVI</h2>
				<!-- Tabovi -->
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<!-- TABLE -->
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
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
					'posts_per_page'	=> 1,
									'post_type'			=> 'post',
				'cat' => 10
				));
				if( $posts ): ?>
				
				<div class="col-md-6">
					
					<?php foreach( $posts as $post ):
						
						setup_postdata( $post );
						
					?>
					
					
					
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					
					
					
					<?php endforeach; ?>
					
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>
				</div>
			</div>
			<div class="col-4"><h2 class="bg-secondary trake">TEČAJNA LISTA</h2></div>
		</div>
		<!-- ****************************
						POČETNA__4. VIJESTI
		*******************************-->
		<div class="row" id='vijesti'>
			<div class="col-md-8">
				<h2 class="bg-primary trake">VIJESTI</h2>
				Ovdje ide carusel-vijesti
				
				<div class="jedan">
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
						
						
						<div>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vijesti'); ?></a>
							<h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							 
							 <p><?php the_category(); ?></p>
						</div>
						
						
						<?php endforeach; ?>
						
					</div>
					
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				
			</div>
			<div class="col-md-4" id="pojam_dana">
				<h2 class="bg-secondary trake">POJAM DANA</h2>
				<div class="pojam_dana">
					<h2 class="color-secondary pojam_naslov">Inicijalna javna ponuda (IPO)</h2>
					<p>Inicijalna javna ponuda (eng. initial public offering – IPO) jest prva javna ponuda običnih dionica nekog privatnog ili držanog poduzeća. Često se skraćeno označava kao IPO. Inicijalnom javnom ponudom privatno ili držano poduzeće izlazi u javnost.</p>
					
					<button type="button" class="btn btn-primary text-uppercase">Pogledaj sve</button>
				</div>
			</div>
		</div>
		<!-- ****************************
				POČETNA__5. DRUŠTVA ZA UPRAVLJANJE
		*******************************-->
		<div class="row" id="logici">
			<div class="col-md-8">
				<h2 class="bg-primary trake">DRUŠTVA ZA UPRAVLJANJE</h2>
				Ovdje ide carusel-logići
				<div class="multiple-items">
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