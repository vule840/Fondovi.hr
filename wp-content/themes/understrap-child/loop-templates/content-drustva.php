<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<!-- /***************************
					FONBDOVI - LOGO IZABIR					
					********************************* -->
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

		<!-- /***************************
					FONDOVI - TABLICA					
					********************************* -->
					<h2 class="mb-0">FONDOVI POD UPRAVLJANJEM</h2>
					<?php
					$post_objects = get_field('post_object');

					if( $post_objects ): ?>
					<table class="table" id="drustva_fondovi">

						<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>

							<tbody>
								<td class="p-2 m-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </td>
							</tbody>
						<?php endforeach; ?>
					</table>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
		<!-- /***************************
					FONDOVI - CONTENT				
					********************************* -->

					<div class="entry-content pt-3">

						<?php the_content(); ?>


						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						) );
						?>

					</div><!-- .entry-content -->



				</article><!-- #post-## -->


<!-- /***************************
					FONDOVI - MAPA				
					********************************* -->

					<h2 class="bg-primary trake mb-0">LOKACIJA NA MAPI</h2>

					<?php 

					$location = get_field('map');

					if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
					<?php endif; ?>
<!-- /***************************
					FONDOVI - MAPA - JS				
					********************************* -->


					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxSSFvDIr5NGKiDtEIF7u0fCVpbDcOOeY"></script>
					<script type="text/javascript">
						(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
		add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
		map.setCenter( bounds.getCenter() );
		map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>


<!-- /***************************
					FONDOVI - POVEZANE VIJESTI			
					********************************* -->

					<h2 class="bg-primary trake mb-0">POVEZANE VIJESTI</h2>


					<?php 

					$posts = get_field('povezane_vijesti_drustva');

					if( $posts ): ?>
					<table class="table saznaj_vise  table-striped">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>

							<tr>

								<td class="slikica"><?php the_post_thumbnail(array(100,100,crop)); ?></td>
								<td class="ml-auto"><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></td>
							</tr>

						<?php endforeach; ?>
					</table>	
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>


