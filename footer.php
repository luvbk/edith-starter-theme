<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edith-starter-theme
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'edith-starter-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'edith-starter-theme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'edith-starter-theme' ), 'edith-starter-theme', '<a href="https://automattic.com/" rel="designer">Laurent Verbeke</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- #container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
