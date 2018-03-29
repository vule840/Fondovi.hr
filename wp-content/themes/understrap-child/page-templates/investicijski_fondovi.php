<?php
/**
 * Template Name: Investicijski_fondovi
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

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					

					<?php endwhile; // end of the loop. ?>

					<!-- FONDOVI -->
<div id="pocetna_investicijski">

					<nav>
					<div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-investicijski-tab" data-toggle="tab" href="#nav-investicijski" role="tab" aria-controls="nav-investicijski" aria-selected="true">Investicijski fondovi</a>
						<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Svi fondovi</a>
						<a class="nav-item nav-link" id="nav-dionicki-tab" data-toggle="tab" href="#nav-dionicki" role="tab" aria-controls="nav-dionicki" aria-selected="false">Dionički</a>
						<a class="nav-item nav-link" id="nav-mjesoviti-tab" data-toggle="tab" href="#nav-mjesoviti" role="tab" aria-controls="nav-mjesoviti" aria-selected="false">Mješoviti</a>
						<a class="nav-item nav-link" id="nav-obveznicki-tab" data-toggle="tab" href="#nav-obveznicki" role="tab" aria-controls="nav-obveznicki" aria-selected="false">Obveznički</a>
						<a class="nav-item nav-link" id="nav-novcani-tab" data-toggle="tab" href="#nav-novcani" role="tab" aria-controls="nav-novcani" aria-selected="false">Novčani</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-investicijski" role="tabpanel" aria-labelledby="nav-investicijski-tab">
						<!-- TABLE -->
						<table class="table table-responsive w-100 d-block d-md-table">
							
							<thead>
								<tr>
									<th scope="col">Naziv fonda</th>
									<th scope="col">Datum</th>
									<th scope="col">Vrijednost</th>
									<th scope="col">Valuta</th>
									<th scope="col">%</th>
									<th scope="col">3.mj</th>
									<th scope="col">6.mj</th>
									<th scope="col">12.mj</th>
									<th scope="col">2018.</th>
									<th scope="col">Starost</th>
								</tr>
								<tr class="investicijski_pocetni">
									<th scope="col">Dionički</th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
								</tr>
						
							</thead>
							<tbody>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							<tr>
									<th scope="row"><a href="#">ZB Euroaktiv</a> </th>
									<td>08.04.2018.</td>
									<td>0,99%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,42%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							<tr>
									<th scope="row"><a href="#">ZB Euroaktiv</a> </th>
									<td>08.04.2018.</td>
									<td>0,99%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,42%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							
							</tbody>
						
						
						</table>
						<!-- DRUGI TABLE -->
						<table class="table table-responsive w-100 d-block d-md-table">
							
							<thead>
								
								<tr class="investicijski_pocetni">
									<th scope="col">Mješovitic</th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
								</tr>
						
							</thead>
							<tbody>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							<tr>
									<th scope="row"><a href="#">ZB Euroaktiv</a> </th>
									<td>08.04.2018.</td>
									<td>0,99%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,42%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							<tr>
									<th scope="row"><a href="#">ZB Euroaktiv</a> </th>
									<td>08.04.2018.</td>
									<td>0,99%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,42%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 1,00%</span></td>
								</tr>
								<tr>
									<th scope="row"><a href="#">KD Invest</a> </th>
									<td>08.04.2018.</td>
									<td>0,00%</td>
									<td>EUR</td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,13%</span></td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,09%</span></td>
									<td><span class="gubitni"><i class="fa fa-sort-desc" aria-hidden="true"></i> 0,09%</span></td>
									<td>0,00%</td>
									<td><span class="dobitni"><i class="fa fa-sort-asc" aria-hidden="true"></i> 0,00%</span></td>
								</tr>
							
							</tbody>
						
						
						</table>
					</div>
					<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
