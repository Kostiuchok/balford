<?php
/**
 * Template Name: Про компанію
 */
get_header();
?>
<section class="section-small bg-img4 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h4><?php the_title(); ?></h4></div>
		</div>
	</div>
</section>

<?php balford_breadcrumbs(); ?>

<section id="about">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-lg-5">
					<?php the_content(); ?>
				</div>
				<div class="col-lg-6 col-lg-offset-1">
					<div id="carousel-about-page" class="carousel slide carousel-fade">
						<ol class="carousel-indicators">
							<li data-target="#carousel-about-page" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-about-page" data-slide-to="1"></li>
						</ol>
						<div role="listbox" class="carousel-inner">
							<div class="item active"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider/2.png' ); ?>" alt="" class="img-responsive center-block"></div>
							<div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider/1.png' ); ?>" alt="" class="img-responsive center-block"></div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
