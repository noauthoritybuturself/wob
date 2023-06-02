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
		
<div class="container-fluid">
	<div class="row">
		<?php 
		$rows = get_field('ticket');
		if($rows){
			foreach($rows as $row){ ?>
				<div class="col-lg-4 col-md-6">
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
								<a href="#" class="ticket-button white rounded">Pagar con BTC</a>
								<a href="#" class="ticket-button orange rounded">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			<?php 
		}
				} ?>
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
	<div class="bg-white border-bottom border-top border-white border-4">
	<div class="container-lg">
		<div class="row text-dark text-center">
			<div class="col-md-12">
				<ul id="ponentes">
					<?php 
					$args = array(
						'post_type' => 'ponente',
						'posts_per_page' => -1
					);
					$ponentes = get_posts($args);
					if ($ponentes): 
						foreach($ponentes as $ponente):  setup_postdata( $ponente );?>
						<li class="shadow slide">
							<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($ponente->ID) ?>" alt="">
							<h5><?php echo $ponente->post_title ?></h5>
						</li>
						<?php endforeach;
						wp_reset_postdata();
					endif;?>

				</ul>

			</div>
			</div>
		</div>
		</div>
		<div class="container-lg">
		<div class="row increase-height">
		</div>
		<div class="row programa">
			<h1 class="text-white">Programa</h1>
			<?php $programa = get_field('programa'); 
			$i = 1;
			
			?>
			<?php foreach($programa as $dia){ ?>
			<div class="col-md-4">
				<div class="single h-100">
					<h3>Dia <?php echo $i; ?></h3>
					<p><?php echo $dia ?> </p>
				</div>
			</div>
			<?php $i++;} ?>
		</div>
		</div>
		<img class="img-fluid overlap" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust2.png" alt="" class="">
		<div class="bg-white border-bottom border-top border-white border-4">
			<div class="container-lg pt-5 sponsors">
			<h1 class="mb-5 text-secondary">Sponsors</h1>
				<div class="row">
					<?php for($i = 0; $i < 3; $i++){ ?>
					<div class="col-md-4">
						<div class="single mb-4">
							<img class="img-fluid" src="https://v2.clayui.com/images/thumbnail_placeholder.gif" alt="" class="img-fluid">
							<h4>Tu</h4>
						</div>
					</div>
					<?php } ?>
					</div>
			</div>
			<div class="container-lg pt-5 sponsors">
			<h1 class="mb-5">Partners</h1>
				<div class="row">
					<?php for($i = 0; $i < 3; $i++){ ?>
					<div class="col-md-4">
						<div class="single mb-4">
							<img class="img-fluid" src="https://v2.clayui.com/images/thumbnail_placeholder.gif" alt="" class="img-fluid">
							<h4>Tu</h4>
						</div>
					</div>
					<?php } ?>
					</div>
			</div>
			<div class="container-lg pt-5 sponsors">
			<h1 class="mb-5">Organizadores</h1>
				<div class="row">
					<?php for($i = 0; $i < 3; $i++){ ?>
					<div class="col-md-4">
						<div class="single mb-4">
							<img class="img-fluid" src="https://v2.clayui.com/images/thumbnail_placeholder.gif" alt="" class="img-fluid">
							<h4>Tu</h4>
						</div>
					</div>
					<?php } ?>
					</div>
			</div>
		</div>
		<div class="container-lg">
			<div class="row sponsors">
			<h1 class="text-white mt-5 mb-5">Cursos</h1>
			<?php for($i = 1; $i <= 2; $i++){ ?>
			<div class="col-md-6">
					<div class="single mb-5">
						<img src="https://v2.clayui.com/images/thumbnail_placeholder.gif" alt="" class="img-fluid">
						<h4>Curso de Merch - Dia <?php echo $i ?></h4>
					</div>
			</div>
			<div class="col-md-6">
				<a class="button orange ticket-button border-0 mx-auto">Reservar</a>
			</div>
			<?php } ?>

			</div>
		</div>
		<div class="bg-white border-bottom border-top border-white border-4">
			<div class="container-lg">
				<div class="row bg-white text-dark">
					<div class="merch-title mt-5 mb-5">
						<div class="square"></div>
						<h1>MERCH</h1>
					</div>
					<div class="col-md-12">
					<p>Del 30 de Septiembre al 2 de Octubre de 2023</p>
					<a class="button ticket-button orange border-0 mt-5 mb-5">Consultar Tienda</a class="button">
					</div>
				</div>
		</div>
		</div>

		<div class="container-lg text-white stand">
        <div class="row">
            <div class="col-md-12">
            <h1 class="mb-5 mt-5">RESERVAR STAND</h1>
            <h5 class="mb-5">Del 30 de Septiembre al 2 de Octubre de 2023</h5>

            <a class="ticket-button orange border-0">Reservar Stand</a>
            </div>
        </div>
		</div>  
		<img class="img-fluid overlap2" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust3.png" alt="" class="">
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
					<a class="mt-3 ticket-button orange border-0">Enviar</a class="mt-3 ticket-button orange">
				</div>
			</div>
		</div>
		</div>
	


<?php get_footer(); ?>