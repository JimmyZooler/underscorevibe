<?php
/**
 * Template part for displaying posts.
 *
 * @package Vibey Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">
        <?php
        if (has_post_thumbnail()) {
            echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'underscorevibe') . get_the_title() . '" rel="bookmark">';
            echo '<div class="small-index-thumbnail clear">';
            echo the_post_thumbnail('index-thumb');
            echo '</div>';
            echo '</a>';
        }
        ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<!--<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php underscorevibe_posted_on(); ?>
		</div><!-- .entry-meta --> 
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
    
	<footer class="entry-footer continue-reading">
                <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading', 'underscorevibe') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
		
	</footer><!-- .entry-footer -->
    </div> <!-- .index-box -->
        <?php underscorevibe_entry_footer(); ?>
</article><!-- #post-## -->
