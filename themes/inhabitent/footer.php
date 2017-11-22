<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-items">
				<div class="footer-item">
					contact info
				</div>

				<div class="footer-item">
					business hours
				</div>

				<div class="footer-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text-dark.svg'; ?>" class="logo" alt="inhabitent logo" />
					</a>
				</div>

					
			</div>
			

				<div class="site-info">
					<p>copyright © 2016 inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
