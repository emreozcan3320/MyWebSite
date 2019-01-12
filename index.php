

<?php get_header(); ?>

<?php echo get_query_var('paged'); ?>

<?php  get_template_part( 'template-parts/blog/bp_popular_post_section', 'none' ); ?>



<?php 
    // WP_Query arguments
    $args = array(
        'post_type'              => array( 'post' ),
        'nopaging'               => false,
        'offset'                 => '1',
    );

    // The Query
    $query = new WP_Query( $args );
?>
<div class="container main_blog_container">
    <div class="container blog_posts_container">
        <div class="row blog_posts_row">


        <div class="col-md-8">        
            <?php 
                if(  $query->have_posts() ):
                    while(  $query->have_posts() ) :  $query->the_post();?>                    
                        <?php get_template_part( 'loop-templates/content'); ?>
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



<?php get_footer(); ?>
