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
		
                <?php /* translators: used between list items, there is a space after the comma */
                    $category_list = get_the_category_list( __( ', ', 'my-simone' ) );

                    if ( underscorevibe_categorized_blog() ) {
                        echo '<div class="category-list">' . $category_list . '</div>';
                    }
                ?>
            
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="entry-meta">
                <?php underscorevibe_posted_on(); ?>


                <?php 
                    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
                        echo '<span class="comments-link">';
                        comments_popup_link( __( 'Leave a comment', 'my-simone' ), __( '1 Comment', 'my-simone' ), __( '% Comments', 'my-simone' ) );
                        echo '</span>';
                    }
                ?>

                </div><!-- .entry-meta -->
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

