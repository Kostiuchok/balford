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
			<div class="col-lg-12"><h4><?php the_title(); ?></h4></div>
		</div>
	</div>
</section>

<?php balford_breadcrumbs(); ?>

<section id="eco">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-5">
					<div id="carousel-eco-page" data-ride="carousel" class="carousel slide carousel-fade">
						<div role="listbox" class="carousel-inner">
							<div class="item active"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/portfolio/1.jpg' ); ?>" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
