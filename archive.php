

<?php get_header(); ?>

<div class="container main_blog_container">
    <div class="container blog_posts_container">
        <div class="row blog_posts_row">


        <div class="col-md-8">        
            <?php 
                if(have_posts() ):?>
                    <header class="header text-center">
                        <?php 
                        the_archive_title('<h1 class="blog-title">', '</h1>');
                        the_archive_description('<p class="lead blog-description taxonomy-description">','</p>');
                        ?>                        
                    </header>
                    <hr>

                    <?php while(have_posts() ) :the_post();?>                    
                        <?php get_template_part( 'loop-templates/content'); ?>
                    <?php endwhile;?>

                    
                    <!-- The pagination component -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo paginate_links();?>
                        </div>
                    </div>
                    
                <?php endif;         
            ?>                    
        </div>


        <?php get_sidebar(); ?>

        </div>
    </div>
</div>



<?php get_footer(); ?>
