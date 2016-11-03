<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

				<!-- Start Content single -->

				<?php the_breadcrumb(); ?>

				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

					<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
					<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

				<?php endwhile; ?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>