<?php
/**
 * Single "news" post.
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

<section>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-lg-8">
					<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>
					<?php the_content(); ?>
					<p><a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="btn btn-gray btn-xs">&larr; Усі новини</a></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
