<?php
/**
* Template Name: Home
*
*/

get_header(); ?>

<div class="bg-white border-bottom border-top border-white border-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5 merch__text">
					<h5><strong>Únete al mayor evento sobre bitcoin y mundo actual de habla hispana. Asiste en vivo u online.<br><br>+30 profesionales de América y Europa. Académicos, emprendedores y divulgadores de diversas disciplinas; +200 participantes reunidos para cooperar y analizar aspectos prometedores y polémicos de bitcoin.</strong><br><br><strong>Aprende de expertos en talleres de iniciación, colabora con iniciativas basadas en bitcoin, haz networking y, si quieres, toma el micro para contar tus dudas y proyectos.</strong><br><br><strong>Watch Out, Bitcoin! es un evento con objetivo social y formativo.</strong> Todo lo recaudado irá destinado a organizar más iniciativas de formación, debate y cooperación similares.</h5>
				</div>
				<div class="col-md-6 text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
					<a href="https://www.tickettailor.com/events/wobitcoin/1005375" class="my-button orange fw-bold rounded">Solicitar acceso online</a> 
					</div>
				</div>
			</div>
		</div>
</div>


<div class="background-image parallax--ponentes parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg ">
			<div class="row border-top">
				<div class="col-md-12" id="ponentes_anchor">
					<h2>Ponentes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section sponsors ponentes ponentes__section">
		<div class="hotizontal-slider__container">
			<div id="ponentes" class="wrapper2 " >
				<?php 
				$args = array(
					'post_type' => 'ponente',
					'posts_per_page' => -1
				);
				$ponentes = get_posts($args);
				if ($ponentes): 
					foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
					<div class="slide box2">
						<div class="single mb-4">
							<a href="<?php echo get_field("url",$ponente->ID) ?>" class="text-decoration-none text-dark" target="_blank">
								<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="" >
								<div class="wob-thumbnail__name">
									<h5>
											<?php echo $ponente->post_title ?>
									</h5>
									<p>
										<?php echo $ponente->post_excerpt ?>
									</p>
								</div>
							</a>
						</div>
				</div>
					<?php endforeach;
					wp_reset_postdata();
				endif;?>

			</div>
		</div>
		<div class="hotizontal-slider__container">
			<div id="" class="wrapper3">
				<?php 
				$args = array(
					'post_type' => 'ponente',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);
				$ponentes = get_posts($args);
				if ($ponentes): 
					foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
					<div class="slide box3">
						<div class="single mb-4">
							<a href="<?php echo get_field("url",$ponente->ID) ?>" class="text-decoration-none text-dark" target="_blank">

								<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="" >
								<h5>
										<?php echo $ponente->post_title ?>
								</h5>
								<p>
										<?php echo $ponente->post_excerpt ?>
								</p>
								
							</a>
						</div>
				</div>
					<?php endforeach;
					wp_reset_postdata();
				endif;?>

			</div>
		</div>
	</div>
	

<div class="container-fluid"> 
		<div class="row parallax background-image border-top border-bottom border-white border-4" id="tickets-anchor"></div>
</div>

<div class="container-fluid" >
	<div class="row">
		<div class="col-md-12 text-center tickets mt-4 border-bottom border-white border-4 tickets-banner__section">
		</div>
	</div>
</div>
<div class="container-fluid hotizontal-slider__section tickets__section">
		<div class="wrapper">
		<?php 
		$rows = get_field('ticket');
		if($rows){
			foreach($rows as $row){ ?>
				<div class="slide box">
					<div class="ticket">
						<div class="check">
							<div class="big">
							<?php echo $row['title'] ?>
							</div>
							<div class="info">
								<p><?php echo $row['text'] ?></p>
							</div>
						</div>
						<div class="stub">
							<div class="ticket-buttons">
								<h2 class="price"><?php echo $row['price'] ?>€</h2>
								<a href="https://buytickets.at/wobitcoin/930659" class="my-button__pay white rounded">Comprar</a> 
								<a href="https://pagosinreglas.ddns.net/plugins/4cT5VGjiFJjPuFnRNLDdnBG1PPUPJ77CTJzXDkzF53cK/TicketTailor" class="my-button__pay orange rounded">Pagar con BTC</a>
							</div>
						</div>
					</div>
			</div>
			<?php 
		}
				} ?>
			</div>
			<div class="arrows"></div>

	</div>
	<div class="bg-white border-bottom border-top border-white border-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5 merch__text">
					<h5><strong>Para ver el evento online, recibe el acceso a los vídeos colaborando en la campaña de recaudación para el streaming:</strong></h5>
				</div>
				<div class="col-md-6 text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
					<a href="https://buy.stripe.com/14k0015L69Er9pu3cs" class="my-button orange btc rounded mb-2">Reservar acceso online</a> 
					<a href="https://pagos.dinerosinreglas.com/apps/C8MFBfM2ieQai6UXfmudfKoxPXj/crowdfund" class="my-button orange rounded">Reservar en BTC</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="background-image--bottom parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="">
					<h2>Únete a la comundiad Wob</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="bg-white border-bottom border-top border-white border-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5 merch__text">
					<h5>Consulta las herramientas disponibles para coordinarte con otros asistentes a las jornadas. Consigue entradas y abonos gracias a la cooperación:</h5>
				</div>
				<div class="col-md-text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
						<a href="https://t.me/WoBitcoin" target="_blank" class="button my-button orange mb-2">Unirse a Telegram</a class="button">
						<a href="https://help.wobitcoin.org/Explore" target="_blank" class="button my-button orange">Unirse a App colaborativa</a class="button">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="background-image--middle parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="programa_anchor">
					<h2>Programa</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-lg mt-5">
		<div class="row programa">
			<div class="offset-md-3 col-md-6">


			<a class="my-button rounded fw-bold mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Descarga la guía wob23</a>
			</div>

			<ul id="programa">
				<?php $programa = get_field('programa'); 
					$dias = ['6 de Octubre','7 de Octubre','8 de Octubre'];
					$i = 0;
					
					?>
					<?php foreach($programa as $dia){ ?>
					<li class="slide">
					<div class="">
						<div class="single h-100">
							<h3><?php echo $dias[$i]; ?></h3>
							<p><?php echo $dia ?> </p>
		
					</div>
					</div>

					</li>
				<?php $i++;} ?>
			</ul>
		</div>
	</div>
	<img class="img-fluid overlap" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust2.png" alt="" class="">
	<div class="background-image--middle2 parallax--sponsors parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="sponsors_anchor">
					<h2>Sponsors</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section sponsors ponentes__section">
		<div class="hotizontal-slider__container">
		<div id="partners_anchor"></div>

			<div id="sponsors" class="wrapper5">
				<?php 	
					$args = array(
						'post_type' => 'sponsor',
						'posts_per_page' => -1
					);

					$sponsors = get_posts($args);
					if ($sponsors): 
						foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
							<div class="slide box5">
								<div class="single mb-4">
									<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">

										<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" >
										<h5>
												<?php echo $sponsor->post_title ?>
										</h5>
									</a>
								</div>
							</div>
						<?php endforeach;
						wp_reset_postdata();
					endif;?>

			</div>
		</div>

		
	</div>
	<div class="background-image--small parallax--partners parallax border-bottom border-top border-white border-4 position-relative" >
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h2>Partners</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-lg sponsors hotizontal-slider__section hotizontal-slider__container ponentes__section">
		<div class="hotizontal-slider__container">
			<div id="partners" class="wrapper6">
				<?php 
					$args = array(
						'post_type' => 'partners',
						'posts_per_page' => -1
					);
					$sponsors = get_posts($args);
					if ($sponsors): 	
						foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
					<div class="slide box6">
						<div class="single mb-4">
							<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" class="img-fluid">
							<h5>
								<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
								<?php echo $sponsor->post_title ?>
								</a>
							</h5>
						</div>
					</div>
				<?php endforeach;
					wp_reset_postdata();
				endif;?>
			</div>
		</div>
	</div>
	
	

	<div class="background-image--small parallax--partners parallax--partners--question parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h2>¿Quieres ser Sponsor?</h2>
					
				</div>
			</div>
		</div>
	</div>
	<div class="background bg-orange">
	<div class="container text-white">
		<div class="row">
			<div class="col-md-6 text-center py-5 header__logo">
					<h5 class="my-auto">Ya está cerrada la campaña para nuevos sponsors presenciales 2023. Aún puedes apoyar la campaña de streaming y aparecer en los vídeos.</h5>
			</div>
			<div class="col-md-6 text-center d-flex align-items-center">
				<div class="mx-auto my-auto py-5">
					<a href="https://watchoutfreedom.com/donate/" target="_blank" class="button my-button px-3">Convertirse en Sponsor</a>
				</div>
			</div>
		</div>
	</div>

	<div class="background-image--bottom parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="tienda_anchor">
					<h2>Tienda y merch</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="bg-white border-bottom border-top border-white border-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5 merch__text">
					<h5>Consulta los artículos sobre WOB y apoya la causa. Puedes recoger tu pedido en el evento.</h5>
				</div>
				<div class="col-md-6 text-center d-flex align-items-center">
					<div class="mx-auto my-auto py-5">
						<a href="<?php echo get_field("merch"); ?>" target="_blank" class="button my-button orange">Consultar Tienda</a class="button">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="background-image parallax--org parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12" id="organizadores_anchor">
					<h2>Organizadores</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="container-fluid sponsors">
		<div class="">
			<div id="organizadores" class="">
				<?php 
					$args = array(
						'post_type' => 'organizadores',
						'posts_per_page' => -1
					);
					$organizadores = get_posts($args);
					if ($organizadores): 
						foreach($organizadores as $organizador):  setup_postdata( $organizador );?>
							<div class="slide organizadores m-2">
							<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($organizador->ID) ?>" alt="" class="img-fluid">
							<h5>
								<a href="<?php echo get_field("url",$organizador->ID) ?>" class="text-decoration-none text-dark" target="_blank">
								<?php echo $organizador->post_title ?>
								</a>
							</h5>
							</div>
					<?php endforeach;
						wp_reset_postdata();
					endif;?>

			</div>
		</div>
	</div>

	<div class="bg-white border-bottom border-top border-white border-4">

		<div class="container-lg">
			<div class="row bg-white text-dark">
				<div class="col-md-12 pt-5 pb-5" id="contacto_anchor">
					<div class="mb-5">
						<div class="square"></div>
						<h2>Contacto</h2>
					</div>
					<?php  echo do_shortcode("[weps id=222]")?>
				</div>
			</div>
		</div>
	</div>
	


<?php get_footer(); ?>