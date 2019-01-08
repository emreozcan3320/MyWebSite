

<?php get_header(); ?>

<?php //get_template_part( 'template-parts/blog-posts', 'none' ); ?>

        </h1>
        <?php 
            if( have_posts() ):

                while( have_posts() ) : the_post();?>
                    <p><?php the_category();?></p>
                    <h1><?php the_title();?></h1>
                    <strong><?php the_time('d/m/Y'); ?></strong> 
                <?php endwhile;

            endif;
        ?>
 </div>

 <!-- Home Section -->
 <div class="container-fluid  d-flex h-100 home_section">
    <div class="row justify-content-center align-self-center home_row ">  
        <div class="col-md-8 mx-md-auto ">  
            <h1 class="text-center display-1 text-light home_title">Hey, I'm  Emre ;) </h1>
        </div>
        <div class="col-md-8 mx-md-auto ">
            <br>  
            <h1 class="text-center display-4 text-light home_sub_title">I'm a Developer </h1>
            <br>
        </div>
        <div class="col-md-8 mx-md-auto  col_icon">  
            <p class="text-center text-light icons" >
                <i class="fab fa-linkedin-in fa-3x social_icon icon "></i>
                <i class="fab fa-github fa-3x social_icon icon"></i>
                <i class="far fa-envelope fa-3x social_icon icon"></i>
            </p>
        </div>
    </div>
</div>



<?php get_footer(); ?>
