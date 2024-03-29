<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 */

// Get ACF vars from options

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel='dns-prefetch' href='//polyfill.io' />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div class="background bg-orange" data-bs-spy="scroll" data-bs-target="#wobnavbar">
  <nav class="navbar navbar-expand-md navbar-dark bg-orange-2 sticky-top ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#wobnavbar" aria-controls="wobnavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	  <a class="navbar-brand" href="">
      		<img src="<?php echo get_theme_file_uri() ?>/dist/img/logo-white.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
		</a>


    <div id="wobnavbar" class="collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link"  href="#tickets-anchor">Tickets</a>
          </li>
          <li class="nav-item" >
		  	<a class="nav-link"  href="#ponentes_anchor">Ponentes</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#programa_anchor">Programa</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#sponsors_anchor">Sponsors</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#partners_anchor">Partners</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#tienda_anchor">Tienda</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#organizadores_anchor">Organizadores</a>
          </li>
		  <li class="nav-item" >
		  	<a class="nav-link"  href="#contacto_anchor">Contacto</a>
          </li>
        </ul></div>

		<div class="social-nav">
		<ul class="navbar-nav">

			<li alt="instagram" class="nav-item"><a href="https://instagram.com/Wo_Bitcoin"><i class="fab fa-instagram"></i></a></li>
			<li alt="twitter" class="nav-item"><a href="https://twitter.com/Wo_Bitcoin"><i class="fab fa-twitter"></i></a></li>	
			<li alt="telegram" class="nav-item"><a href="https://t.me/WoBitcoin"><i class="fab fa-telegram"></i></a></li>
			<li alt="buttons" class="nav-item"><a href="https://help.wobitcoin.org/Explore#?zoom=5&lat=40.2476&lng=-3.5713"><img src="<?php echo get_theme_file_uri() ?>/dist/img/buttons.png" alt="" class="button-icon"></a></li>	
			<li alt="youtube" class="nav-item"><a href="https://www.youtube.com/@WOBitcoin"><i class="fab fa-youtube"></i></a></li>	
			</ul>
		</div>

    </div>
  </nav>
	<div class="container text-white">
		<div class="row">
			<div class="col-md-6 text-center pt-5 pb-5 header__logo">
				<img class="img-fluid  header__logo--img" src="<?php echo get_theme_file_uri() ?>/dist/img/logo-header.png" alt="">
				<div>
					<a class="my-button rounded btc fw-bold" href="https://www.tickettailor.com/events/wobitcoin/930659#" target="_blank" id="scrollToTickets">
						Comprar Entradas
					</a>
					<a class="my-button rounded fw-bold" href="https://pagosinreglas.ddns.net/plugins/4cT5VGjiFJjPuFnRNLDdnBG1PPUPJ77CTJzXDkzF53cK/TicketTailor" target="_blank" id="scrollToTickets">
						Pagar con Bitcoin
					</a>
				</div>
			</div>
			<div class="col-md-6 text-center d-flex align-items-center">
				<div class="mx-auto pb-5">
					<h1 class=" fs-5 pt-5 header__quote"><?php echo get_field('frase') ?></h1>
					<h2 class="mt-3 fs-6 header__author"><a class="header__link" href="https://twitter.com/uo_vani" target="blank"><?php echo get_field('author') ?></a></h2>
				</div>
			</div>
		</div>
	</div>

	<?php include get_template_directory() . '/modal.php'; ?>