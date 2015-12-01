<?php
/**
 *  Template Name: Artists
 *
 * @package Vibey Underscores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                    <header class="entry-header">
                        <?php the_title( '<h1 class="section-heading">', '</h1>' ); ?>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'artists' ); ?>
                    
                    <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
