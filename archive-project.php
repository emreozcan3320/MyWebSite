<?php get_header(); ?>

<?php 
    // WP_Query arguments
    $args = array(
        'post_type'              => array( 'project' ),
    );

    // The Query
    $query = new WP_Query( $args ); 
?>
            
<div class="container ">
    <div class="container ">
        <div class="row ">


        <div class="col-md-8">        
            <?php 
                if(  $query->have_posts() ):
                    while(  $query->have_posts() ) :  $query->the_post();?>                    
                        <?php get_template_part( 'loop-templates/content','project'); ?>
                    <?php endwhile;?>

                    
                    <!-- The pagination component -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo paginate_links();?>
                        </div>
                    </div>
                    
                <?php endif;  
                wp_reset_postdata();          
            ?>                    
        </div>


        <?php get_sidebar(); ?>

        </div>
    </div>
</div>