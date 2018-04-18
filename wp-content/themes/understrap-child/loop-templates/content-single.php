<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	

	<?php if (is_singular('drustva')): ?>
		<h2 class="bg-primary trake"><?php the_title() ?></h2>
		<div class="row">
			<div class="col-6"><?php 

									$image = get_field('drustva_logo');

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</div>
			<div class="col-6"><?php the_field('drustva_tx') ?></div>
		</div>

		<!-- OVDJE JE PETLJA ZA FONDOVE SELECT -->

		
		 	<h2>FONDOVI POD UPRAVLJANJEM</h2>
		   
		 
		<?php
			$post_objects = get_field('post_object');

			if( $post_objects ): ?>
			    <select class="form-control" id="drustva_fondovi">
			    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <option class="p-3 m-3" value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
			        
			    <?php endforeach; ?>
			    </select>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
	<?php else: ?>
		<h2 class="bg-primary trake"><?php the_category() ?></h2>

			<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

			<header class="entry-header">

				

						<div class="row" id="single_post_naslov">
									<div class="col-md-9">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
									<div class="col-md-3">
										<h4 class="kategorija"><?php the_category(); ?><i class="fa fa-square kvadrat_kategorije" aria-hidden="true"></i></h4>
									</div>
								</div>
			
			</header>
	<?php endif ?>

	

	<div class="entry-content pt-3">

		<?php the_content(); ?>
	
	
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->


	<?php if (is_singular('drustva')): ?>
		<h2 class="bg-primary trake"><?php the_title() ?></h2>
		<?php the_field('mapa'); ?>
		<div id="map_canvas" style="height: 350px;width: 1200px; margin: 0.6em;"></div>
			
	<?php endif ?>	


	
	


	 <!--<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer> .entry-footer -->

</article><!-- #post-## -->
<?php $map = get_field('map', get_the_ID()); ?>

<script type="text/javascript"> 

  function initialize() {
        var myLatlng = new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>);
        var myOptions = {
          zoom: 11,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      }

      function loadScript() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
        document.body.appendChild(script);
      }

      window.onload = loadScript;
    </script>