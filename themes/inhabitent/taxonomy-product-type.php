<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		  <h2>
        <?php single_term_title(); ?>
      </h2>
			<header class="page-header">
			
        

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
        
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
    <a href= "<?php echo get_permalink();?>">
      <?php the_post_thumbnail( 'large' ); ?>
      
		<?php endif; ?>

		<p><?php the_title()  ?><span class="price-meta"> ...........$<?php 
$meta_print_value=get_post_meta(get_the_ID(),'price',true);
echo($meta_print_value);
?></span></p>

		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
  </div><!-- #primary -->
  
  <?php get_footer(); ?>