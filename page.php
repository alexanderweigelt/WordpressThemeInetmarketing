<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

			<!-- Start Content page -->

				<?php the_breadcrumb(); ?>

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

					// End the loop.
				endwhile;

				the_posts_pagination(array(
					'mid_size' => 2,
					'prev_text' => '<',
					'next_text' => '>'
				) );

				?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>