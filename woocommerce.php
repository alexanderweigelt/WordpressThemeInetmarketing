<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

			<!-- Start Content page -->

				<?php the_breadcrumb(); ?>

				<?php
				// The WooCommerce loop.
				if (function_exists('woocommerce_content')){
					woocommerce_content();
				}

				?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>