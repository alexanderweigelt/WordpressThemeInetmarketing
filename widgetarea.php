
			<!-- Widgetarea Footer -->
			<div class="widgetFooter">
			<?php 
				// Sidabar fuer Widgets im Footer 
				if ( is_active_sidebar( 'sidebar-2' ) ) : 
			?>
			
				<!-- Sidebar 2 -->
				<div class="sidebar-2 container">	
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
					
				</div>
				<?php endif; ?>

			</div>