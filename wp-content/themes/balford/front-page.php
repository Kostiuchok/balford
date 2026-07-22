<?php
/**
 * Home page: hero + about teaser + latest news + ecology teaser + contacts.
 */
get_header();

$about_page   = balford_translated_page( 'about' );
$ecology_page = balford_translated_page( 'ecology' );
?>

<header data-background="<?php echo esc_url( get_template_directory_uri() . '/assets/img/header/23.jpg' ); ?>" class="intro introhalf">
	<div class="intro-body">
		<h5><?php echo esc_html( balford__( 'ТОВ «БАЛФОРД УКРАЇНА»' ) ); ?></h5>
		<h1><?php echo esc_html( balford__( 'АЛЬТЕРНАТИВНА ГІДРОЕНЕРГІЯ' ) ); ?></h1>
		<h4><?php echo esc_html( balford__( 'річка Стрий, с. Довге-Гірське' ) ); ?></h4>
		<h4><?php echo esc_html( balford__( 'Сучасні технології та інвестиції в майбутнє' ) ); ?></h4>
	</div>
</header>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h3><?php echo esc_html( balford__( 'Про компанію' ) ); ?></h3>
				<?php if ( $about_page ) : ?>
					<?php echo wp_kses_post( wpautop( wp_trim_words( $about_page->post_content, 60 ) ) ); ?>
					<p><a href="<?php echo esc_url( get_permalink( $about_page ) ); ?>" class="btn btn-gray btn-xs"><?php echo esc_html( balford__( 'Читати більше' ) ); ?></a></p>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 col-lg-offset-1">
				<div id="carousel-light" class="carousel slide carousel-fade">
					<ol class="carousel-indicators">
						<li data-target="#carousel-light" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-light" data-slide-to="1"></li>
					</ol>
					<div role="listbox" class="carousel-inner">
						<div class="item active"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider/2.png' ); ?>" alt="" class="img-responsive center-block"></div>
						<div class="item"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider/1.png' ); ?>" alt="" class="img-responsive center-block"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-small bg-img4 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4><i class="icon icon-big icon ion-ios-infinite-outline"></i><?php echo esc_html( balford__( 'Новини' ) ); ?></h4>
				<p><?php echo esc_html( balford__( 'В даному розділі зібрані всі головні новини і події компанії Балфорд Україна' ) ); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="news" class="section-small">
	<div class="container">
		<h3 class="pull-left"><?php echo esc_html( balford__( 'Новини' ) ); ?></h3>
		<div class="clearfix"></div>
		<div class="row grid-pad">
			<?php
			$news_query = new WP_Query( array(
				'post_type'      => 'news',
				'posts_per_page' => 8,
			) );
			while ( $news_query->have_posts() ) :
				$news_query->the_post();
				?>
				<div class="col-sm-6 col-md-3">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'medium', array( 'class' => 'img-responsive center-block' ) ); ?>
						<h5><?php the_title(); ?></h5>
					</a>
					<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-gray btn-xs"><?php echo esc_html( balford__( 'Читати більше' ) ); ?></a>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<p class="text-center"><a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="btn btn-dark-border"><?php echo esc_html( balford__( 'Усі новини' ) ); ?></a></p>
	</div>
</section>

<section class="section-small bg-img3 text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4><i class="icon icon-big icon ion-ios-sunny-outline"></i><?php echo esc_html( balford__( 'Екологія' ) ); ?></h4>
				<p><?php echo esc_html( balford__( 'В даному розділі зібрані всі головні новини з екології та природних ресурсів' ) ); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="eco" class="bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div id="carousel-light3" data-ride="carousel" class="carousel slide carousel-fade">
					<div role="listbox" class="carousel-inner">
						<div class="item active"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/portfolio/1.jpg' ); ?>" alt=""></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<?php if ( $ecology_page ) : ?>
					<h3><?php echo esc_html( get_the_title( $ecology_page ) ); ?></h3>
					<?php echo wp_kses_post( wpautop( wp_trim_words( $ecology_page->post_content, 60 ) ) ); ?>
					<p><a href="<?php echo esc_url( get_permalink( $ecology_page ) ); ?>" class="btn btn-dark-border btn-lg"><?php echo esc_html( balford__( 'Детальніше' ) ); ?></a></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
