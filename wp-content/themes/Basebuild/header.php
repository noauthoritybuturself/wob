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


  <div class="background bg-orange">
	<div class="container text-white">
		<div class="row">
			<div class="col-md-6 text-center pt-5 pb-5 header__logo">
				<img class="img-fluid  header__logo--img" src="<?php echo get_theme_file_uri() ?>/dist/img/logo-header.png" alt="">
				<div>
					<a class="my-button" href="#tickets-wrap" id="scrollToTickets">
						Comprar Entradas
					</a>
				</div>
			</div>
			<div class="col-md-6 text-center d-flex align-items-center">
				<div class="mx-auto pb-5">
					<h1 class="fw-light fs-5 pt-5 header__quote"><?php echo get_field('frase') ?></h1>
					<h2 class="mt-3 fw-light fs-6 header__author"><?php echo get_field('author') ?></h2>
				</div>
			</div>
		</div>
	</div>

	