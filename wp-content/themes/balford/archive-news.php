<?php
/**
 * Archive of the "news" custom post type.
 */
get_header();
?>
<section class="section-small bg-img4 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h4>Новини</h4></div>
		</div>
	</div>
</section>

<section class="section-small">
	<div class="container">
		<div class="row grid-pad">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6 col-md-3">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'medium', array( 'class' => 'img-responsive center-block' ) ); ?>
						<h5><?php the_title(); ?></h5>
					</a>
					<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-gray btn-xs">Читати більше</a>
				</div>
			<?php endwhile; ?>
		</div>

		<?php the_posts_pagination(); ?>
	</div>
</section>

<?php get_footer(); ?>
