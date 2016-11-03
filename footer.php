	<div class="container">
		<footer id="mainFooter" class="clearfix">
			<div class="row">
				<div  class="col-md-12">
					<?php

					//WP Secundary Menu
					wp_nav_menu( array(
						'theme_location'  => 'secondary',
						'menu' => '',
						'container' => 'nav',
						'container_class' => 'container',
						'container_id' => '',
						'menu_class' => '',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => false,
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul>%3$s</ul>',
						'depth' => 1,
						'walker' => ''
					));


					//Widgetarea Footer
					get_template_part( 'widgetarea' );
					?>
				</div>
			</div>
			<div class="col-md-11">
				<p>&copy; <?php echo date('Y') ?> by Alexander Weigelt</p>
			</div>
			<div class="col-md-1">
				<a href="#top" id="upstairs" class="btn btn-default btn-xs" title="nach oben">top</a>
			</div>
		</footer>
	</div>

		<!-- /container -->

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/javascripts/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/javascripts/main.js"></script>
	
	<?php wp_footer(); ?>
	
</body>
</html>