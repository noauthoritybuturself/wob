<?php

/**
 * The template for displaying the footer
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12">
			<div id="footer-logo"> <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_file_uri() ?>/dist/img/logo.png" alt="logo" /></a></div>
			<div class="social-container">
			</div>
				
			</div>
			<div class="col-md-3 col-sm-12">
				<?php foundationpress_footer_nav1(); ?>
			</div>
			<div class="col-md-6 col-sm-12">
			
			</div>
		</div>
		<div class="row baseline-content">
			<div class="col-md-3 col-sm-12">
				<p>Copyright <?php echo date('Y'); ?></p>
			</div>
		</div>
	</div>
	
</footer>
<div id="back-top">
	<span class="icon"><i class="fa fa-arrow-up"></i></span>
</div>
<?php wp_footer(); ?>
</body>

</html>