<?php
/**
 * Template Name: Контакти
 */
get_header();
?>
<section class="section-small bg-img2 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h4>Контакти</h4></div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-lg-8">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
