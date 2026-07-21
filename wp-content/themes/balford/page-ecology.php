<?php
/**
 * Template Name: Екологія
 */
get_header();
?>
<section class="section-small bg-img3 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h4>Екологія</h4></div>
		</div>
	</div>
</section>

<section id="eco">
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
