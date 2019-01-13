
<div class="container fromMyBlog_section">
   <div class="col-12 col-md-12">
      <h1 class="h2 text-center text-dark title">FROM MY BLOG</h1>
      <hr>
   </div>
   <div class="row ">

   <?php 
      // WP_Query arguments
      $args = array(
         'post_type'              => array( 'post' ),
         'posts_per_page'         => '2',
      );

      // The Query
      $queryHomePageFromBlog = new WP_Query( $args );
   ?>

   <?php if($queryHomePageFromBlog->have_posts()): ?>
         <?php while($queryHomePageFromBlog->have_posts()):  $queryHomePageFromBlog->the_post()?>
            <?php get_template_part( 'loop-templates/content','lastTwoPost'); ?>
         <?php endwhile;?>
   <?php endif; wp_reset_postdata();?>

   
   </div>

   
   <div class="row">
      
   <div class="col-10 mx-auto blog_post_card readmore_card">
      <p>
         <a class="blog_post_more more_alone" href="<?php echo get_site_url();?>/blog/">Read More <i class="fas fa-angle-right"></i></a>
      </p>
      <div>  
      </div>
   </div>

   </div>
   
</div>