<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

				<!-- Start Content archive -->

				<?php the_breadcrumb(); ?>

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							if ( is_day() ) :
								printf( 'Archives des Tages: %s', '<span>' . get_the_date() . '</span>' );
							elseif ( is_month() ) :
								printf( 'Archives des Monat: %s', '<span>' . get_the_date( 'F Y' ) . '</span>' );
							elseif ( is_year() ) :
								printf( 'Archives des Jahres: %s', '<span>' . get_the_date( 'Y' ) . '</span>' );
							else :
								echo get_cat_name( get_the_ID() );
							endif; ?>
						</h1>
					</header><!-- .page-header -->

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

				endif; ?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>