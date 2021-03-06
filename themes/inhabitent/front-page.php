<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="hero-container">
		<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" class="hero-logo" alt="inhabitent logo" />
		</section>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
          
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<!-- Shop -->
<section class= "product-info container">
	<h1>Shop Stuff</h1>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
               ) );
							 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
						<?php endif; ?>
						</section>
<!-- shop -->
<h1>Inhabitent Journal</h1>
<section class="inhab-journal container">

<?php
    $args = array( 'numberposts' => '3', 'order' => 'DSC', );
    $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>


<article class= "journal-info">
	<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'medium' ); ?>
	<?php endif; ?>
	<div class="post-info">
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		</div><!-- .entry-meta -->

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<a href="<?php echo get_the_permalink();?>"> <p>Read Entry</p></a>
		 </div>
		</article>

            <?php endforeach; wp_reset_postdata(); ?>
  
</section><!-- Journal container -->
<h1>Latest Adventures</h1>
<section class="adventure"><!-- Adventure -->

		<div class="canoe">
			<h3>Getting Back to Nature in a Canoe</h3>
			<a class="read-more">Read More</a>
		</div>


		<div class="friends">
			<h3>A Night with Friends at the Beach</h3>
			<a class="read-more">Read More</a>
		</div>


		<div class="mountain">
			<h3>Taking in the View at Big Mountain</h3>
			<a class="read-more">Read More</a>
		</div>

		<div class="star">
			<h3>Star-gazing at the Night Sky</h3>
			<a class="read-more">Read More</a>
		</div>
	<p><a class="more-adventures">More Adventures</a></p>
</section>

<?php get_footer(); ?>
