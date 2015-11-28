<?php
/**
 * Template part for displaying posts.
 *
 * @package Vibey Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
    <div class="index-box row">
        <?php
        if (has_post_thumbnail()) {
            echo '<a class="thumbnail-wrap pull-left" href="' . get_permalink() . '" title="' . __('Read ', 'underscorevibe') . get_the_title() . '" rel="bookmark">';
            echo '<div class="small-index-thumbnail clear">';
            echo the_post_thumbnail('index-thumb');
            echo '</div>';
            echo '</a>';
        }
        ?>
               
        <div class="entry-box pull-right">
            <div class="entry-meta">
                        <?php the_time('d.m'); ?>
            </div> <!-- .entry-meta -->

            <div class="index-header">
            <!--<header class="entry-header">-->
                    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                    <?php if ( 'post' == get_post_type() ) : ?> 
                        <?php endif; ?>
            <!--</header> .entry-header--> 
            </div> 

            <div class="entry-content">
                    <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
            <span class="continue-reading"> 
                       <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading', 'underscorevibe') . get_the_title() . '" rel="bookmark">Read More <i class="fa fa-arrow-right"></i></a>'; ?>
                   </span>
        </div> <!-- .entry-box -->
        
<!--	<footer class="entry-footer">
                		
	</footer> .entry-footer --> 
        
    </div>  <!-- .index-box--> 
        <?php underscorevibe_entry_footer(); ?>
</article><!-- #post-## -->
