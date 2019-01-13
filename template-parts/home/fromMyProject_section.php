<div class="container fromMyProject_section">
    <div class="row">
        <div class="col-12 mx-auto col-md-8 offset-2">  
            <h1 class="h2 text-center text-dark title">FROM MY PROJECT</h1>
            <hr>
        </div>  
    </div>

    <div class="row flip-over-row">

    <?php 
        // WP_Query arguments
        $args = array(
            'post_type'              => array( 'project' ),
            'posts_per_page'         => '3',
        );

        // The Query
        $query = new WP_Query( $args ); 
    ?>

    <?php 
        if(  $query->have_posts() ):
            while(  $query->have_posts() ) :  $query->the_post();?>                    
                <?php get_template_part( 'loop-templates/content','lastThreeProject'); ?>
            <?php endwhile;?>        
        <?php endif;  
        wp_reset_postdata();          
    ?>               
    
    </div>

    <div class="row">
      <div class="col-10 mx-auto blog_post_card readmore_card">
         <p>
            <a class="blog_post_more more_alone" href="<?php echo get_site_url();?>/?post_type=project">See More <i class="fas fa-angle-right"></i></a>
         </p>
         <div>  
         </div>
      </div>
   </div>

    
</div>
