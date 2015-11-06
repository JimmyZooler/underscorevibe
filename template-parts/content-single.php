<?php
/**
 * Template part for displaying single posts.
 *
 * @package Vibey Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
        
        
        
    <div class="floating-content">
        <?php 
             if (has_post_thumbnail()) {
                echo '<div class="single-post-thumbnail clear">';
                echo the_post_thumbnail('large-thumb');
                echo '</div>';
            }
        ?>
              
        <header class="entry-header">
		          
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        </header><!-- .entry-header -->        
        
        <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscorevibe' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    </div> <!-- .floating-content -->
    
    <footer class="entry-footer">
        <?php underscorevibe_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    
</article><!-- #post-## -->

