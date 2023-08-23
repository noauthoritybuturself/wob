<?php
/**
* Template Name: Home
*
*/

get_header(); ?>
<div class="container-fluid"> 
		<div class="row parallax background-image border-top border-bottom border-white border-4"></div>
</div>

<div class="container-fluid" id="tickets-wrap">
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
								<a href="https://pagosinreglas.ddns.net/plugins/4cT5VGjiFJjPuFnRNLDdnBG1PPUPJ77CTJzXDkzF53cK/TicketTailor" class="my-button__pay white rounded">Pagar con BTC</a>
								<a href="https://buytickets.at/wobitcoin/930659" class="my-button__pay orange rounded">Pagar con fiat</a> 
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
	<div class="background-image parallax--ponentes parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h2>Ponentes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section sponsors ponentes__section">
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
							</a>
						</div>
				</div>
					<?php endforeach;
					wp_reset_postdata();
				endif;?>

			</div>
		</div>
	</div>
	<div class="background-image--middle parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h2>Programa</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-lg mt-5">
		<div class="row programa">
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
				<div class="col-md-12">
					<h2>Sponsors</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section sponsors ponentes__section">
		<div class="hotizontal-slider__container">
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
	<div class="background-image--small parallax--partners parallax border-bottom border-top border-white border-4 position-relative">
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
					<h5 class="my-auto">Participa en WOB y ayuda a extender el debate sobre Bitcoin en España</h5>
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
				<div class="col-md-12">
					<h2>Tienda y merch</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="bg-white border-bottom border-top border-white border-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center py-5 merch__text">
					<h5>Consulta los artículos sobre WOB y apoya la causa de la asociación</h5>
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
				<div class="col-md-12">
					<h2>Organizadores</h2>
				</div>
			</div>
		</div>
	</div>		
	<div class="container-fluid sponsors hotizontal-slider__section">
		<div class="hotizontal-slider__container hotizontal-slider__container--org">
			<ul id="organizadores" class="wrapper4">
				<?php 
					$args = array(
						'post_type' => 'organizadores',
						'posts_per_page' => -1
					);
					$organizadores = get_posts($args);
					if ($organizadores): 
						foreach($organizadores as $organizador):  setup_postdata( $organizador );?>
					<div class="slide box4">
						<div class="single mb-4">
							<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($organizador->ID) ?>" alt="" class="img-fluid">
							<h5>
								<a href="<?php echo get_field("url",$organizador->ID) ?>" class="text-decoration-none text-dark" target="_blank">
								<?php echo $organizador->post_title ?>
								</a>
							</h5>
						</div>
					</div>
					<?php endforeach;
						wp_reset_postdata();
					endif;?>

			</ul>
		</div>
	</div>

	<div class="bg-white border-bottom border-top border-white border-4">

		<div class="container-lg">
			<div class="row bg-white text-dark">
				<div class="col-md-12 pt-5 pb-5">
					<div class="mb-5">
						<div class="square"></div>
						<h2>Contacto</h2>
					</div>
					<h5>Escribenos aqui y/o síguenos en redes</h5>
					<?php  echo do_shortcode("[weforms id=222]")?>
				</div>
			</div>
		</div>
	</div>
	


<?php get_footer(); ?>