<?php get_header(); ?>
            
<?php 
    if(have_posts() ):
        while(have_posts() ) :the_post();?>                    
            <?php get_template_part( 'loop-templates/content','single'); ?>                                     
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
?>                    


<?php get_footer(); ?>