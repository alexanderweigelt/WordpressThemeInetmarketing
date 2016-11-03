<?php get_header(); ?>

	<div class="container">
		<div id="mainContent">
			<?php $classmaincontent = ( is_active_sidebar( 'sidebar-1' )) ? 'col-md-8' : 'col-md-12'; ?>
			<section class="<?php echo $classmaincontent; ?>">

				<!-- Start Content error 404 -->

				<?php the_breadcrumb(); ?>

				<h2>Leider nichts gefunden</h2>

				<p>Ihre gesuchte Seite ist leider nicht verf&uuml;gbar. Nutzen Sie eventuell unsere Suche um die gew&uuml;nschte Seite zu finden.</p>

				<?php get_search_form(); ?>

				<!-- End Content -->

			</section>
			<?php get_sidebar(); ?>

		</div>
	</div>
<?php get_footer(); ?>