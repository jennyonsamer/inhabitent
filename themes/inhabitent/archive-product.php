<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h2>Shop Stuff</h2>
            
              <?php $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
               ) );
            
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
                     </div>
                 <?php endforeach; ?>
                </div><!-- product-type-blocks -->
                <?php endif; ?>
                    
            <?php /* Start the Loop */ ?>
            
            <div class= "category">
            <?php while ( have_posts() ) : the_post(); ?>
            
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   
                            <?php if ( has_post_thumbnail() ) : ?>
                            <a href= "<?php echo get_permalink();?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            <?php endif; ?>

                            <p><?php the_title()  ?>
                            <span class="price-meta"> .........
                                     $<?php echo CFS()->get('price'); ?>
                            </span>
                            </p>

                    </article><!-- #post-## -->

                
                <?php endwhile; ?>
                </div><!-- category -->

                <?php the_posts_navigation(); ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
                             
        </main><!-- #main -->
  </div><!-- #primary -->
  
  <?php get_footer(); ?>