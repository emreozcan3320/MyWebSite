<?php get_header(); ?>
            
<div class="container">
    <div id="content" role="main">
 
      <?php while ( have_posts() ) : the_post(); ?>
 
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
            <div class="entry-content">
              <?php the_content(); ?> 
            </div><!-- .entry-content -->
 
          </article><!-- #post -->
 
      <?php endwhile; // end of the loop. ?>
 
    </div><!-- #content -->
  </div><!-- #primary -->                 


<?php get_footer(); ?>

