<?php

/**
 * The template for displaying the footer
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<footer class="footer">
	<div class="container-lg text-white stand">
		<div class="row text-white">
				<div class="col-md-6">

					<ul class="list-unstyled">
						<li><a href="https://twitter.com/Wo_Bitcoin">Twitter</a></li>
						<li><a href="https://wobitcoin.org/">Carta principios</a></li>		
					</ul>
					
				</div>
				<div class="col-md-6">
					<ul class="list-unstyled">
						<li><a href="https://wobitcoin.org/">Wob pasadas</a></li>
						<li><a href="https://www.dropbox.com/s/hne3v5kbrarcy0v/POL%C3%8DTICA%20DE%20PRIVACIDAD-wof.pdf?raw=1">Legal</a></li>
						<li><a href="https://wobitcoin.org/">Carta principios</a></li>
					</ul>
				</div>
			</div>
			
		</div> 
		<div class="row baseline-content firma">
			<div class="col-md-12">
				<div class="float-end">
					<span class="text-white"><a href="https://watchoutfreedom.com">© Watch Out, Bitcoin! by Watch Out, Freedom! - Todos los derechos reservados</a></span>
					<img class="img-fluid footer__logo" width="70" src="<?php echo get_theme_file_uri() ?>/dist/img/icon-footer.png"" alt="">
				</div>
			</div>
		</div> 
		<img class="img-fluid overlap" src="<?php echo get_theme_file_uri() ?>/dist/img/ilust.png" alt="" class="">  
	</div>

</footer>
<?php wp_footer(); ?>
</body>

</html>