<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

				<!-- Start Content index -->

				<?php the_breadcrumb(); ?>

				<?php if ( have_posts() ) : ?>

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_content(); ?>

					<?php endwhile; ?>
					<?php the_posts_pagination(array(
						'mid_size' => 2,
						'prev_text' => '<',
						'next_text' => '>'
					) ); ?>


				<?php else : ?>
					<p>Keine Inhalt gefunden</p>
				<?php endif; ?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>