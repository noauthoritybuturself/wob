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
		<?php for($i = 1; $i <= 3; $i++){ ?>
				<div class="col-lg-4 col-md-6">
					<div class="ticket">
					<div class="stub">
						<div class="top">
						<span class="admit">Admit</span>		
						</div>
						<div class="number"><?php echo $i ?></div>
						<div class="invite">
						Invite for you
						</div>
					</div>
					<div class="check">
						<div class="big">
						You're <br> Invited
						</div>
						<div class="number">#<?php echo $i ?></div>
						<div class="info">
						<section>
							<div class="title">Date</div>
							<div>4/27/2016</div>
						</section>
						<div>
							<a href="#" class="ticket-button white">Pagar com BTC</a>
							<a href="#" class="ticket-button orange">Comprar</a>
						</div>
						</div>
					</div>
					</div>
				</div>
			<?php } ?>
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
					for($i = 1; $i<=7;$i++){?>
						<li class="shadow slide">
						<img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/dist/img/icon-naranja.png" alt="">
						<h4>Nome <?php echo $i ?></h4>
						</li>
					<?php } ?>
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
			<div class="col-md-4">
				<div class="single">
					<h3>Dia 1</h3>
					<p>Entrada Normal</p>
				</div>
			</div>
			<div class="col-md-4">
			<div class="single">

				<h3>Dia 2</h3>
				<p>Entrada Normal</p>

			</div>
			</div>
			<div class="col-md-4">
			<div class="single">

				<h3>Dia 3</h3>
				<p>Entrada Normal</p>

			</div>
			</div>
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
					<h1>Contacto</h1>
					<h5>Escribenos aqui y/o síguenos en redes</h5>
  					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
					<a class="mt-3 ticket-button orange border-0">Enviar</a class="mt-3 ticket-button orange">
				</div>
			</div>
		</div>
		</div>
	


<?php get_footer(); ?>