<?php get_header(); ?>

<div class="col-md-8">
<?php 
    if(have_posts() ):
        while(have_posts() ) :the_post();?>
                 <h1 class="header h1"><?php the_title();?></h1>
                 <p><?php the_content(); ?></p>                            
        <?php endwhile;?>     
    <?php endif;         
?> 
</div>           
                   

<?php get_sidebar(); ?>

<?php get_footer(); ?>