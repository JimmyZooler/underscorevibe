<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Vibey Underscores
 */

?>

	</div><!-- #content -->
        

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-box">
                <div id="footer-title" >
                <h2>Vibe With Us</h2>
                </div>
            </div>
            <?php get_sidebar('footer'); ?>
            <?php underscorevibe_social_menu(); ?>
                <div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'underscorevibe' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscorevibe' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf('Web Development by <a href="http://underscores.me/" rel="designer">Craig Rushon</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
