<?php

/**
 * The template for displaying the footer
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<footer class="footer">
	<div class="container mt-5">
		<div class="row text-white">
			<div class="col-md-6">

			<ul class="list-unstyled">
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Carta principios</a></li>		
			</ul>
				
			</div>
			<div class="col-md-6">
				<ul class="list-unstyled">
					<li><a href="#">Wob pasadas</a></li>
					<li><a href="#">Legal</a></li>
					<li><a href="#">Carta principios</a></li>
				</ul>
			</div>
		</div>
		<div class="row baseline-content">
			<div class="col-md-12">
				<div class="float-end">
					<span class="text-white">© Watch Out Freedom - Todos los derechos reservados</span>
					<img class="img-fluid" width="70" src="<?php echo get_theme_file_uri() ?>/dist/img/icon-footer.png"" alt="">
				</div>
			</div>
		</div>
	</div>
	
</footer>
<?php wp_footer(); ?>
</body>

</html>