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
					<h3>Contact Info</h3>
					<span>
						<i class="fa fa-envelope" aria-hidden="true"></i>
					  <a href="mailto:webmaster@example.com">info@inhabitent.com</a>
					</span>
					<span>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a class="tel" href="tel:555-555-5555">778-456-7891</a>
					</span>
					<span>
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
					</span>
				</div>

				<div class="footer-item">
					<h3>Business Hours</h3>
					<p class="hours">
      			<span class="day-of-week">Monday-Friday:</span> 9am to 5pm
					</p>
					
					<p class="hours">
      			<span class="day-of-week">Saturday:</span> 10am to 2pm
					</p>
   				<p class="hours">
      			<span class="day-of-week">Sunday:</span> Closed
						</p>
				</div>

				<div class="footer-item footer-logo">
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
