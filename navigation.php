		<!-- Navigation -->

		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="glyphicon glyphicon-home"></span></a>
				</div>
				<?php

				// Primary navigation menu.

				wp_nav_menu(
					array(
						'menu' => 'primary',
						'theme_location' => 'primary',
						'depth' => 2,
						'menu_class' => 'nav navbar-nav',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbar',
						'fallback_cb' => 'bootstrapNavwalker::fallback',
						'walker' => new bootstrapNavwalker()
					)
				);

				?>
				<!--/.nav-collapse -->
			</div>
		</nav>
