
			<!-- Content ausgeben -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
				<?php
					// Ausgabe Überschrift
					if ( is_single() or is_page() ) :
			the_title( '<h2>', '</h2>' );
					else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?>

				</header>
				<div class="clearfix">
				<?php
					if ( has_post_thumbnail() ) {
						// Ausgabe Post Thumbnail
						echo '
						<!-- Post Thumbnail -->'."\n";

						echo get_the_post_thumbnail( $post->ID, 'single-view', array( 'class' => 'img-responsive pull-right img-thumbnail' ) );
					}
				?>
				<?php
					//Conent anzeigen
					the_content();
					if( is_single() ) : ?>
					<a href="javascript:history.back()">Zurück</a>
				<?php endif; ?>

				</div>

				<!-- Tags -->
				<?php
					the_tags( '<footer><ul><li>', '</li><li>', '</li></ul></footer>' );
				?>

				<!-- WP-Links -->
				<?php
				$defaults = array(
					'before'           => '<ul class="pagination">',
					'after'            => '</ul>',
					'link_before'      => '<li>',
					'link_after'       => '</li>',
					'next_or_number'   => 'number',
					'separator'        => ' ',
					'nextpagelink'     => '&Rang;',
					'previouspagelink' => '&Lang;',
					'pagelink'         => '%',
					'echo'             => 1
				);

				wp_link_pages( $defaults );
				?>

			</article>
