<?php get_header(); ?>

<?php 
    // WP_Query arguments
    $args = array(
        'post_type'              => array( 'project' ),
    );

    // The Query
    $query = new WP_Query( $args ); 
?>
            
<?php 
    if($query->have_posts() ):
        while($query->have_posts() ) : $query->the_post();?> 

        <?php get_template_part( 'loop-templates/content','project'); ?>  

        <?php endwhile;?>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 prev">
                        <p><?php previous_post_link(); ?></p>
                    </div>
                    <div class="col-md-6 next">
                        <p><?php next_post_link(); ?></p>
                    </div>
                </div>
            </div>      
    <?php endif; 
    // Restore original Post Data
    wp_reset_postdata();        
?>                    


<?php get_footer(); ?>