<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage PixelPrecise
 * @since 2012
 */
?>
<?php if ( is_page('home-page') ) { ?>
<?php } else { ?>
</div><!-- .inner -->
<?php } ?>
<div id="silverwrap">
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
	<ul id="social">
		<li id="listtitle">Social</li>
		<li><a href="http://twitter.com/pixelprecise">Twitter</a></li>
		<li><a href="http://facebook.com/pixelprecise">Facebook</a></li>
		<li><a href="https://plus.google.com/101434090481075265943" rel="publisher">Google+</a></li>
	</ul>
	<ul id="links">
		<li id="listtitle">Links</li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>deals">Deals!</a></li>
		<li><a href="http://www.thumbtack.com/ma/mansfield/web-developers/web-design-development">Business consulting</a></li>
	</ul>
	</div>
	
	</footer><!-- #colophon -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</div> <!-- id darkpurplewrap -->
</body>
</html>