<?php
/**
* Template Name: Home
*
*/

get_header(); ?>
<div class="container-fluid">
		<div class="row parallax background-image border-top border-bottom border-white border-4"></div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center tickets mt-4 mb-4 border-bottom border-white border-4">
		</div>
	</div>
</div>
		
<div class="container-fluid hotizontal-slider__section">
	<div class="row hotizontal-slider__container">
		<ul id="tickets" class="cS-hidden">
		<?php 
		$rows = get_field('ticket');
		if($rows){
			foreach($rows as $row){ ?>
				<li class="shadow slide">
				<div class="">
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
								<a href="#" class="my-button__pay white rounded">Pagar con BTC</a>
								<a href="#" class="my-button__pay orange rounded">Comprar</a>
							</div>
						</div>
					</div>
				</div>
				</li>
			<?php 
		}
				} ?>
			</ul>
		</div>
	</div>
	<div class="background-image parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h1>Ponentes</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid hotizontal-slider__section">
		<div class="sponsors hotizontal-slider__container">
			<ul id="ponentes">
				<?php 
				$args = array(
					'post_type' => 'ponente',
					'posts_per_page' => -1
				);
				$ponentes = get_posts($args);
				if ($ponentes): 
					foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
					<li class="slide">
						<div class="single mb-4">
							<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="" >
							<h5>
								<a href="<?php echo get_field("url",$ponente->ID) ?>" class="text-decoration-none text-dark" target="_blank">
									<?php echo $ponente->post_title ?>
								</a>
							</h5>
						</div>
					</li>
					<?php endforeach;
					wp_reset_postdata();
				endif;?>

			</ul>
		</div>
	</div>
	<div class="container-lg">
		<div class="row increase-height">
		</div>
		<div class="row programa">
			<h1 class="text-white">Programa</h1>
			<?php $programa = get_field('programa'); 
			$dias = ['6 de Octubre','7 de Octubre','8 de Octubre'];
			$i = 0;
			
			?>
			<?php foreach($programa as $dia){ ?>
			<div class="col-md-4">
				<div class="single h-100">
					<h3><?php echo $dias[$i]; ?></h3>
					<p><?php echo $dia ?> </p>
				</div>
			</div>
			<?php $i++;} ?>
		</div>
	</div>
	<img class="img-fluid overlap" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust2.png" alt="" class="">
	<div class="background-image parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h1>Sponsors</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-lg pt-5 sponsors">
		<ul id="sponsors">
		<?php 
			$args = array(
				'post_type' => 'sponsor',
				'posts_per_page' => -1
			);
			$sponsors = get_posts($args);
			if ($sponsors): 
				foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
			<li class="slide">
				<div class="single mb-4">
					<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" class="img-fluid">
					<h5>
						<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
						<?php echo $sponsor->post_title ?>
						</a>
					</h5>
				</div>
			</li>
			<?php endforeach;
				wp_reset_postdata();
			endif;?>

			</ul>
	</div>
	<div class="background-image parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h1>Partners</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container-lg pt-5 sponsors">
		<ul id="partners">
			<?php 
				$args = array(
					'post_type' => 'partners',
					'posts_per_page' => -1
				);
				$sponsors = get_posts($args);
				if ($sponsors): 
					foreach($sponsors as $sponsor):  setup_postdata( $sponsor );?>
				<li class="slide">
					<div class="single mb-4">
						<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($sponsor->ID) ?>" alt="" class="img-fluid">
						<h5>
							<a href="<?php echo get_field("url",$sponsor->ID) ?>" class="text-decoration-none text-dark" target="_blank">
							<?php echo $sponsor->post_title ?>
							</a>
						</h5>
					</div>
				</li>
			<?php endforeach;
				wp_reset_postdata();
			endif;?>
		</ul>
	</div>
	
	<div class="background-image">
	<div class="container-lg text-white">
			<div class="row">
				<div class="col-md-12">
				<h1 class="mb-5 mt-5">¿Quieres ser Sponsor?</h1>
				<h5 class="mb-5">Únete a Wob y convirétete en una referencia de Bitcoin en España</h5>

				<a href="<?php echo get_field("stand"); ?>" target="_blank" class="button button-width my-button orange border-0">Convertirse en Sponsor</a>
				</div>
			</div>
	</div>  
	</div>
	<div class="background-image parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h1>Organizadores</h1>
				</div>
			</div>
		</div>
	</div>		
	<div class="container-lg pt-5 sponsors">
		<ul id="organizadores">
			<?php 
				$args = array(
					'post_type' => 'organizadores',
					'posts_per_page' => -1
				);
				$organizadores = get_posts($args);
				if ($organizadores): 
					foreach($organizadores as $organizador):  setup_postdata( $organizador );?>
				<li class="shadow slide">
					<div class="single mb-4">
						<img class="img-fluid img-thumbnail wob-thumbnail" src="<?php echo get_the_post_thumbnail_url($organizador->ID) ?>" alt="" class="img-fluid">
						<h5>
							<a href="<?php echo get_field("url",$organizador->ID) ?>" class="text-decoration-none text-dark" target="_blank">
							<?php echo $organizador->post_title ?>
							</a>
						</h5>
					</div>
				</li>
				<?php endforeach;
					wp_reset_postdata();
				endif;?>

		</ul>
	</div>
	<!-- <div class="container-lg pt-5 sponsors">
	</div>
	<div class="bg-white border-bottom border-top border-white border-4">
	</div>
	<div class="background-image parallax border-bottom border-top border-white border-4 position-relative">
		<div class="container-lg">
			<div class="row border-top">
				<div class="col-md-12">
					<h1>Cursos</h1>
				</div>
			</div>
		</div>
	</div>
		<div class="container-lg">
			<div class="row sponsors mt-5 mb-5">
			<ul id="cursos">
				<?php 
					$args = array(
						'post_type' => 'cursos',
						'posts_per_page' => -1
					);
					$cursos = get_posts($args);
					if ($cursos): 
						foreach($cursos as $curso):  setup_postdata( $curso );?>
					<li class="shadow slide">
						<div class="">
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
										<a href="#" class="my-button white rounded">Reservar con BTC</a>
										<a href="#" class="my-button orange rounded">Reservar</a>
									</div>
								</div>
							</div>
							<h5><?php echo $curso->post_title ?></h5>
						</div>
						<a href="<?php echo get_field("reservar",$curso->ID) ?>" target="_blank" class="text-decoration-none"><div class="my-button button orange">RESERVAR</div></a>
					</li>
					<?php endforeach;
						wp_reset_postdata();
					endif;?>

					</ul>
			</div>
		</div> -->
		<div class="bg-white border-bottom border-top border-white border-4">
			<div class="container-lg">
				<div class="row bg-white text-dark">
					<div class="merch-title mt-5 mb-5">
						<div class="square"></div>
						<h1>MERCH</h1>
					</div>
					<div class="col-md-12">
					<p>Del 30 de Septiembre al 2 de Octubre de 2023</p>
					<a href="<?php echo get_field("merch"); ?>" target="_blank" class="button button-width my-button orange mt-5 mb-5">Consultar Tienda</a class="button">
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white border-bottom border-top border-white border-4">

		<div class="container-lg">
			<div class="row bg-white text-dark">
				<div class="col-md-12 pt-5 pb-5">
					<div class="mb-5">
						<div class="square"></div>
						<h1>Contacto</h1>
					</div>
					<h5>Escribenos aqui y/o síguenos en redes</h5>
  					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
					<a class="button mt-3 button-width my-button orange">Enviar</a>
				</div>
			</div>
		</div>
		</div>
	


<?php get_footer(); ?>