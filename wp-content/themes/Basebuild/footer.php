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
<?php wp_footer(); ?>
</body>

</html>