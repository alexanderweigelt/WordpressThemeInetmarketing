<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

				<!-- Start Content search -->

				<?php the_breadcrumb(); ?>

				<?php /* The loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php comments_template(); ?>

				<?php endwhile; ?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>