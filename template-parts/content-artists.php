<?php
/**
 * The template used for displaying page content in page-artists.php
 *
 * @package Vibey Underscores
 */

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1> 
        <?php the_content(); ?>
<?php endwhile; else: endif; ?>

<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
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
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <div class="entry-content">
                   <p><?php the_excerpt(); ?></p>
               </div>
            </div>            
        </div>
            
        <?php endwhile; else: endif; ?>

