

<?php get_header(); ?>

<?php echo is_front_page();?>

<?php //get_template_part( 'template-parts/blog-posts', 'none' ); ?>
<div class="container main_blog_container">
    <div class="container blog_posts_container">
        <div class="row blog_posts_row">

 <div class="col-md-8">
        <!-- Page Heading -->
        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>
        <?php 
            if( have_posts() ):

                while( have_posts() ) : the_post();?>

                <!-- Project One -->                              
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">

                            <div class="card-img-right flex-auto d-none d-lg-block" width="1500" height="250">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                            
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary"><?php the_category();?></strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#"><?php the_title();?></a>
                                </h3>
                                <div class="mb-1 text-muted"><?php the_time('d/m/Y'); ?></div>
                                <p class="card-text mb-auto"><?php the_content();?></p>
                                <a href="#">Continue reading</a>
                            </div>    

                        </div>
                    </div>
                </div>
                <!-- /.row -->                   

                <?php endwhile;

            endif;
        ?>
 </div>

<?php get_sidebar(); ?>

</div>
    </div>
</div>

<?php get_footer(); ?>
