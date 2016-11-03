<?php
/**
 *
 * Template Name: Landingpage
 *
 */

get_header(); ?>

    <div class="container">
        <div id="mainContent">
            <section class="col-md-12">

                <!-- Start Content landingpage -->

                <?php the_breadcrumb(); ?>

                <?php if ( have_posts() ) : ?>

                    <?php /* The loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php else : ?>
                    <p>Keine Inhalt gefunden</p>
                <?php endif; ?>

                <!-- End Content -->

            </section>

        </div>
    </div>
<?php get_footer(); ?>