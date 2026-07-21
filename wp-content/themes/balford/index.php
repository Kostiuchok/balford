<?php
/**
 * Fallback template.
 */
get_header();
?>
<section>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>
