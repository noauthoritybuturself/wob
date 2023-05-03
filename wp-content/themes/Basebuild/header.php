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
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <header class="header">
	</header>
	<div class="container-fluid bg-orange text-white">
		<div class="row">
			<div class="col-md-6 text-center ">
				<img class="img-fluid m-5" src="<?php echo get_theme_file_uri() ?>/dist/img/logo-header.png" alt="">
				<a class="border border-white p-4 d-inline-block" href="">
					<span class="text-uppercase font-spacing">Comprar Entradas</span>
				</a>
			</div>
			<div class="col-md-6 text-center">
				<h2 class="font-weight-normal mt-5">"Frase sobre el evento"</h2>
				<h2 class="font-weight-bold">Bitcoin Mag</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust.png" alt="">
			</div>
		</div>

	</div>
	
	