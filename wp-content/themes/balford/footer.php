<?php
/**
 * Footer section with contact details.
 */
?>
<section class="footer bg-gray">
	<div id="contacts" class="container">
		<div class="row">
			<div class="col-md-2">
				<p class="small">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
				</p>
			</div>
			<div class="col-md-4">
				<p>
					<i class="fa fa-phone fa-fw"></i> +38 (050) 330 38 16<br>
					<i class="fa fa-map-marker fa-fw"></i> с. Довге, Львівської області, Україна.<br>
					<i class="fa fa-envelope fa-fw"></i> info@balfordukraine.com.ua<br>
				</p>
			</div>
			<div class="col-md-3">
				<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> ТОВ "Балфорд Україна"</p>
			</div>
		</div>
	</div>
</section>

<?php wp_footer(); ?>
</body>
</html>
